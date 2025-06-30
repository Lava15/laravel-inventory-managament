<?php

namespace App\Filament\Resources\ProductTranslations\Pages;

use App\Filament\Resources\ProductTranslations\ProductTranslationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProductTranslation extends ViewRecord
{
    protected static string $resource = ProductTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
