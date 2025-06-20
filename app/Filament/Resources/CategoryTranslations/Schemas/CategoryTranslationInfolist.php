<?php

namespace App\Filament\Resources\CategoryTranslations\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CategoryTranslationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('category.name'),
                TextEntry::make('slug'),
                TextEntry::make('locale'),
                TextEntry::make('name'),
                TextEntry::make('meta_title'),
                TextEntry::make('meta_description'),
                TextEntry::make('meta_robots'),
                TextEntry::make('meta_canonical'),
                ImageEntry::make('meta_image'),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
