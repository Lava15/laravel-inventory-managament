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
        Select::make('product_id')
          ->relationship('product', 'id')
          ->label(__('filament-panels::product.product_id'))
          ->required(),
        TextInput::make('name')
          ->label(__('filament-panels::product.product_name'))
          ->required(),
        Textarea::make('description')
          ->label(__('filament-panels::product.product_description'))
          ->required()
          ->columnSpanFull(),
        Select::make('locale')
          ->label(__('filament-panels::product.product_locale'))
          ->options([
            LanguageEnums::Uz->value => LanguageEnums::Uz->getLabel(),
            LanguageEnums::Ru->value => LanguageEnums::Ru->getLabel(),
            LanguageEnums::En->value => LanguageEnums::En->getLabel(),
          ]),
        TextInput::make('slug')
          ->label('Slug')
          ->required(),
        TextInput::make('meta_title'),
        Textarea::make('meta_description')
          ->columnSpanFull(),
      ]);
  }
}
