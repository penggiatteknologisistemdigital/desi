<?php

namespace App\Filament\Resources\PesanTitikBalihoResource\Pages;

use App\Filament\Resources\PesanTitikBalihoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesanTitikBaliho extends EditRecord
{
    protected static string $resource = PesanTitikBalihoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
