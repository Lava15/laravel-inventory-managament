<?php

namespace App\Filament\Resources\CategoryTranslations\Pages;

use App\Filament\Resources\CategoryTranslations\CategoryTranslationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoryTranslations extends ListRecords
{
    protected static string $resource = CategoryTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
