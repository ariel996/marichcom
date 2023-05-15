<?php

namespace App\Filament\Resources\SortieResource\Pages;

use App\Filament\Resources\SortieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSorties extends ListRecords
{
    protected static string $resource = SortieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
