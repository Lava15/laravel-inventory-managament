<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Shared\Enums\LanguageEnums;

class ProductForm
{
  public static function configure(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextInput::make('base_price')
          ->label(__('filament-panels::product.product_price'))
          ->required()
          ->numeric()
          ->prefix('UZS'),
        TextInput::make('sku')
          ->label(__('filament-panels::product.product_sku'))
          ->required()
          ->unique()
          ->maxLength(255),
        TextInput::make('order')
          ->label(__('filament-panels::product.product_order'))
          ->required()
          ->numeric()
          ->default(999),
        Toggle::make('is_active')
          ->label(__('filament-panels::general.is_active'))
          ->required(),
        Toggle::make('is_featured')
          ->label(__('filament-panels::general.is_featured'))
          ->required(),
        Grid::make()
          ->schema([
            Section::make("O'zbek tilidagi mahsulot")
              ->schema(ProductTranslationForm::make(LanguageEnums::Uz->value)),
            Section::make('Продукт на русском языке')
              ->schema(ProductTranslationForm::make(LanguageEnums::Ru->value)),
          ])
        ->columnSpanFull(),
      ]);
  }
}
