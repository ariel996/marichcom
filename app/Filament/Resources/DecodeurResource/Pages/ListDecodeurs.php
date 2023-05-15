<?php

namespace App\Filament\Resources\DecodeurResource\Pages;

use App\Filament\Resources\DecodeurResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDecodeurs extends ListRecords
{
    protected static string $resource = DecodeurResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
