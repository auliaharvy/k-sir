<?php

namespace App\Filament\Tenant\Resources\SopResource\Pages;

use App\Filament\Tenant\Resources\SopResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSops extends ListRecords
{
    protected static string $resource = SopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
