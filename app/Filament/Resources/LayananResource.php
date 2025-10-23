<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananResource\Pages;
use App\Filament\Resources\LayananResource\RelationManagers;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Master Layanan';
    protected static ?string $pluralLabel = 'Layanan';
    protected static ?string $modelLabel = 'Layanan';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_layanan')
                    ->label('Kode Layanan')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('layanan')
                    ->label('Nama Layanan')
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
                    ->label('Tambah Kode Layanan')
                    ->modalHeading('Tambah Kode Layanan')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal')
                    ->disableCreateAnother(),
            ])
            ->columns([
                    Tables\Columns\TextColumn::make('kode_layanan')->label('Kode Layanan')
                        ->searchable()
                        ->sortable()
                        ->extraAttributes(['class' => 'whitespace-normal break-words max-w-xs']),
                    Tables\Columns\TextColumn::make('layanan')->label('Layanan')
                        ->searchable()
                        ->sortable()
                        ->extraAttributes(['class' => 'whitespace-normal break-words max-w-xs']),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit Layanan')
                    ->modalSubmitActionLabel('Simpan Perubahan')
                    ->modalCancelActionLabel('Batal'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLayanans::route('/'),
            // 'create' => Pages\CreateLayanan::route('/create'),
            // 'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
