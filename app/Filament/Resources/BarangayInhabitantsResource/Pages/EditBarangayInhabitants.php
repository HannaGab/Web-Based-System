<?php

namespace App\Filament\Resources\BarangayInhabitantsResource\Pages;

use App\Filament\Resources\BarangayInhabitantsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangayInhabitants extends EditRecord
{
    protected static string $resource = BarangayInhabitantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
