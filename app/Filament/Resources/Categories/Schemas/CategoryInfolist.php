<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CategoryInfolist
{
  public static function configure(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextEntry::make('parent.name')->label(__('filament-panels::category.parent')),
        TextEntry::make('name')->label(__('filament-panels::category.category_name')),
        TextEntry::make('position')->label(__('filament-panels::category.position'))->numeric(),
        IconEntry::make('is_active')->label(__('filament-panels::general.is_active'))->boolean(),
        IconEntry::make('is_featured')->label(__('filament-panels::general.is_featured'))->boolean(),
        ImageEntry::make('image')->label(__('filament-panels::general.image')),
        TextEntry::make('deleted_at')->label(__('filament-panels::general.deleted_at'))
          ->dateTime(),
        TextEntry::make('created_at')->label(__('filament-panels::general.created_at'))
          ->dateTime(),
        TextEntry::make('updated_at')->label(__('filament-panels::general.updated_at'))
          ->dateTime(),
      ]);
  }
}
