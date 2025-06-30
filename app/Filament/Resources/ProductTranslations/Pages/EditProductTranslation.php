<?php

namespace App\Filament\Resources\ProductTranslations\Pages;

use App\Filament\Resources\ProductTranslations\ProductTranslationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProductTranslation extends EditRecord
{
    protected static string $resource = ProductTranslationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
