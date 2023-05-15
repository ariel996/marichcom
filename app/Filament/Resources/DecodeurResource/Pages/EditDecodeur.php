<?php

namespace App\Filament\Resources\DecodeurResource\Pages;

use App\Filament\Resources\DecodeurResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDecodeur extends EditRecord
{
    protected static string $resource = DecodeurResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
