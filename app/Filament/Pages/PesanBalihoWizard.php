<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use App\Models\PesanTitikBaliho;
use Illuminate\Support\Str;

class PesanBalihoWizard extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $slug = 'pesan-baliho';
    protected static string $view = 'filament.pages.pesan-baliho-wizard';
    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];
    public int $step = 1;

    public function mount(): void
    {
        $this->data = session('draft_pesan_baliho', []);
        $this->form->fill($this->data);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_trans')
                                    ->default('TRX-' . strtoupper(Str::random(8)))
                                    ->disabled()
                                    ->dehydrated(true),
                Forms\Components\Tabs::make('Pesanan Baliho')
                    ->tabs([
                        // TAB 1
                        Forms\Components\Tabs\Tab::make('Pilih Titik')
                            ->schema([
                                Forms\Components\Select::make('baliho_id')
                                    ->label('Pilih Lokasi Baliho')
                                    ->relationship('baliho', 'nama_baliho')
                                    ->searchable()
                                    ->required(),
                                Forms\Components\Textarea::make('catatan')
                                    ->label('Catatan tambahan')
                                    ->maxLength(255),
                            ]),

                        // TAB 2
                        Forms\Components\Tabs\Tab::make('Data Pemohon')
                            ->schema([
                                Forms\Components\Select::make('instansi_id')
                                    ->label('Instansi')
                                    ->relationship('instansi', 'instansi')
                                    ->searchable()
                                    ->required(),

                                Forms\Components\TextInput::make('nama_pic')
                                    ->label('Nama PIC')
                                    ->required(),

                                Forms\Components\TextInput::make('tlp_pic')
                                    ->label('Telepon PIC')
                                    ->tel()
                                    ->required(),

                                Forms\Components\FileUpload::make('upload_surat')
                                    ->label('Upload Surat Permohonan')
                                    ->disk('public')
                                    ->directory('surat')
                                    ->maxSize(5120),
                            ]),

                        // TAB 3
                        Forms\Components\Tabs\Tab::make('Jadwal & Upload')
                            ->schema([
                                Forms\Components\DatePicker::make('tanggal_mulai')
                                    ->label('Tanggal Mulai')
                                    ->required(),

                                Forms\Components\DatePicker::make('tanggal_selesai')
                                    ->label('Tanggal Selesai')
                                    ->required(),

                                Forms\Components\FileUpload::make('upload_desain')
                                    ->label('Upload Desain Baliho')
                                    ->disk('public')
                                    ->directory('desain')
                                    ->maxSize(5120),

                                Forms\Components\Select::make('status_pakai')
                                    ->label('Status')
                                    ->options([
                                        0 => 'Belum Dipakai',
                                        1 => 'Sedang Dipakai',
                                        2 => 'Selesai',
                                    ])
                                    ->default(0),
                            ]),
                    ])
            ])
            ->statePath('data');
    }

    public function saveStep()
    {
        session()->put('draft_pesan_baliho', $this->form->getState());
        Notification::make()->title('Data disimpan sementara.')->success()->send();
    }

    public function nextStep()
    {
        $this->saveStep();
        if ($this->step < 3) {
            $this->step++;
        }
    }

    public function prevStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function submit()
    {
        $finalData = session('draft_pesan_baliho', $this->form->getState());
        PesanTitikBaliho::create($finalData);
        session()->forget('draft_pesan_baliho');

        Notification::make()
            ->title('Pesanan berhasil disimpan!')
            ->success()
            ->send();

        return redirect()->route('filament.admin.resources.pesan-titik-balihos.index');
    }
}
