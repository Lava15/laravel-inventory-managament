<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
  public static function configure(Schema $schema): Schema
  {
    return $schema
      ->components([
        // Select::make('parent_id')
        //   ->label(__('filament-panels::category.parent'))
        //   ->relationship('parent', 'name'),
        TextInput::make('name')
          ->label(__('filament-panels::category.category_name'))
          ->required(),
        TextInput::make('position')
          ->label(__('filament-panels::category.position'))
          ->required()
          ->numeric()
          ->default(0),
        Toggle::make('is_active')
          ->label(__('filament-panels::general.is_active'))
          ->required(),
        Toggle::make('is_featured')
          ->label(__('filament-panels::general.is_featured'))
          ->required(),
        FileUpload::make('image')
          ->label(__('filament-panels::general.image'))
          ->image(),
      ]);
  }
}
