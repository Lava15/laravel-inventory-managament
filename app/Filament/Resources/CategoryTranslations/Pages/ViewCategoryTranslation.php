<?php

namespace App\Filament\Resources\CategoryTranslations\Pages;

use App\Filament\Resources\CategoryTranslations\CategoryTranslationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoryTranslation extends ViewRecord
{
    protected static string $resource = CategoryTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
