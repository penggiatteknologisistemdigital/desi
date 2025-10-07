<?php

namespace App\Filament\Resources;

use App\Models\Baliho;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Filament\Resources\BalihoResource\Pages;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\FileUpload;

class BalihoResource extends Resource
{
    protected static ?string $model = Baliho::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Master Baliho';
    protected static ?string $pluralLabel = 'Baliho';
    protected static ?string $slug = 'baliho';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_baliho')
                    ->label('Nama Baliho')
                    ->required(),

                Forms\Components\TextInput::make('lokasi_baliho')
                    ->label('Lokasi')
                    ->required(),

                FileUpload::make('foto_baliho')
                    ->label('Foto Baliho')
                    ->image()
                    ->disk('public')
                    ->required()
                    ->directory('baliho')
                    ->visibility('public')
                    ->imagePreviewHeight('100')
                    ->loadingIndicatorPosition('left')
                    ->downloadable(false)
                    ->openable(false)
                    ->previewable(false)
                    ->maxSize(10240)
                    ->acceptedFileTypes(['image/png', 'image/jpeg']),

                Forms\Components\Select::make('ukuran_baliho')
                    ->label('Ukuran Baliho')
                    ->options([
                        '4M X 8M' => '4M X 8M',
                        '4M X 6M' => '4M X 6M',
                        '3M X 4M' => '3M X 4M',
                    ])
                    ->required(),

                Forms\Components\Select::make('layout_baliho')
                    ->label('Layout Baliho')
                    ->options([
                        'Vertical' => 'Vertical',
                        'Horizontal' => 'Horizontal',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Baliho')
                    ->modalHeading('Tambah Baliho')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal')
                    ->disableCreateAnother(),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('nama_baliho')->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-normal break-words max-w-xs']),
                Tables\Columns\TextColumn::make('lokasi_baliho')->label('Lokasi')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-normal break-words max-w-xs']),
                ImageColumn::make('foto_baliho')
                    ->label('Foto')
                    ->disk('public')
                    ->size(60)
                    ->square()
                    ->extraAttributes(['class' => 'cursor-pointer'])
                    ->action(
                        Action::make('preview')
                            ->modal()
                            ->modalHeading('Preview Foto Baliho')
                            ->modalContent(fn (Baliho $record) => view('filament.balihos._preview', [
                            'record' => $record,
                        ]))
                        ->modalSubmitAction(false)
                        ->modalCancelActionLabel('Close')
                ),
                Tables\Columns\TextColumn::make('ukuran_baliho')->label('Ukuran'),
                Tables\Columns\TextColumn::make('layout_baliho')->label('Layout'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit Baliho')
                    ->modalSubmitActionLabel('Simpan Perubahan')
                    ->modalCancelActionLabel('Batal'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBalihos::route('/'),
            // 'create' => Pages\CreateBaliho::route('/create'),
            // 'edit' => Pages\EditBaliho::route('/{record}/edit'),
        ];
    }
}
