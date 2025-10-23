<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstansiResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use App\Models\Instansi;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Forms;

class InstansiResource extends Resource
{
    protected static ?string $model = Instansi::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Master Instansi';
    protected static ?string $pluralLabel = 'Instansi';
    protected static ?string $modelLabel = 'Instansi';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('instansi')
                    ->label('Nama Instansi')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Instansi')
                    ->modalHeading('Tambah Instnsi')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal')
                    ->disableCreateAnother(),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('instansi')
                    ->label('Nama Instansi')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalHeading('Edit Instansi')
                    ->modalWidth('lg')
                    ->modal()
                    ->successNotificationTitle('Instansi berhasil diperbarui')
                    ->modalSubmitActionLabel('Simpan Perubahan')
                    ->modalCancelActionLabel('Batal')
                    ->after(function ($record, $data, $action) {
                        $action->getLivewire()->dispatch('$refresh');
                    }),
                Tables\Actions\DeleteAction::make()
                    ->modalHeading('Hapus Instansi')
                    ->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInstansis::route('/'),
        ];
    }
}
