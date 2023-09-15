<?php

namespace App\Filament\Resources\FungsiResource\Pages;

use App\Filament\Resources\FungsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFungsis extends ListRecords
{
    protected static string $resource = FungsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
