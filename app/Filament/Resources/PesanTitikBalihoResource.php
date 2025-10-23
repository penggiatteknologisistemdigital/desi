<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesanTitikBalihoResource\Pages;
use App\Filament\Resources\PesanTitikBalihoResource\RelationManagers;
use App\Models\PesanTitikBaliho;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PesanTitikBalihoDetail;
// use App\Models\FotoRekap;
use App\Models\Instansi;
use App\Models\Baliho;
use App\Models\User;
use Carbon\Carbon;

class PesanTitikBalihoResource extends Resource
{
    protected static ?string $model = PesanTitikBaliho::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralLabel = 'Pesan Titik Baliho';
    protected static ?string $navigationGroup = 'Produk';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Pesan Titik Baliho')
                    ->modalHeading('Pesan Titik Baliho')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batal')
                    ->url(route('filament.admin.pages.pesan-baliho'))
                    ->disableCreateAnother(),
            ])
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPesanTitikBalihos::route('/'),
        ];
    }
}
