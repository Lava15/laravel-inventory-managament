<?php

namespace App\Filament\Resources\ProductTranslations\Schemas;

use Filament\Schemas\Schema;
use Shared\Enums\LanguageEnums;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ProductTranslationForm
{
  public static function configure(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextInput::make('product_id')
          ->required(),
        TextInput::make('name')
          ->required(),
        Textarea::make('description')
          ->required()
          ->columnSpanFull(),
        Select::make('locale')
          ->label(__('filament-panels::category.category_locale'))
          ->options([
            LanguageEnums::Uz->value => LanguageEnums::Uz->getLabel(),
            LanguageEnums::Ru->value => LanguageEnums::Ru->getLabel(),
            LanguageEnums::En->value => LanguageEnums::En->getLabel(),
          ]),
        TextInput::make('slug')
          ->required(),
        TextInput::make('meta_title'),
        Textarea::make('meta_description')
          ->columnSpanFull(),
      ]);
  }
}
