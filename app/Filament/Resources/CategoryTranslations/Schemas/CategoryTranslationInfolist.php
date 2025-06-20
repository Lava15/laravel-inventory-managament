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
        TextEntry::make('category.name')
          ->label(__('filament-panels::category.parent_category')),
        TextEntry::make('slug')
          ->label('Slug'),
        TextEntry::make('locale')
          ->label(__('filament-panels::category.category_locale')),
        TextEntry::make('name')
          ->label(__('filament-panels::category.category_name')),
        TextEntry::make('meta_title'),
        TextEntry::make('meta_description'),
        TextEntry::make('meta_robots'),
        TextEntry::make('meta_canonical'),
        ImageEntry::make('meta_image'),
        TextEntry::make('deleted_at')
          ->label(__('filament-panels::general.deleted_at'))
          ->dateTime(),
        TextEntry::make('created_at')
          ->label(__('filament-panels::general.created_at'))
          ->dateTime(),
        TextEntry::make('updated_at')
          ->label(__('filament-panels::general.updated_at'))
          ->dateTime(),
      ]);
  }
}
