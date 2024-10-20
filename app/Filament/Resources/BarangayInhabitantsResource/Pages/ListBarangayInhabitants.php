<?php

namespace App\Filament\Resources\BarangayInhabitantsResource\Pages;

use App\Filament\Resources\BarangayInhabitantsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangayInhabitants extends ListRecords
{
    protected static string $resource = BarangayInhabitantsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
