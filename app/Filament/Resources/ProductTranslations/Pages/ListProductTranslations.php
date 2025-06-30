<?php

namespace App\Filament\Resources\ProductTranslations\Pages;

use App\Filament\Resources\ProductTranslations\ProductTranslationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductTranslations extends ListRecords
{
    protected static string $resource = ProductTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
