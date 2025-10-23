<?php

namespace App\Filament\Resources\PesanTitikBalihoResource\Pages;

use App\Filament\Resources\PesanTitikBalihoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesanTitikBalihos extends ListRecords
{
    protected static string $resource = PesanTitikBalihoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\Action::make('pesan')
            //     ->label('Pesan Titik Baliho')
            //     ->color('warning')
            //     ->icon('heroicon-o-plus')
            //     ->url(route('filament.admin.pages.pesan-baliho')),
        ];
    }

}
