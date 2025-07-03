<?php


namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Modules\Catalog\Models\ProductTranslation;

class ProductTranslationForm
{
  public static function make(string $locale): array
  {
    return [
      Hidden::make('locale')
        ->default($locale),

      TextInput::make('name')
        ->label(__('filament-panels::product.product_name') . " ($locale)")
        ->required()
        ->maxLength(255),

      Textarea::make('description')
        ->label(__('filament-panels::product.product_description') . " ($locale)")
        ->columnSpanFull(),

      TextInput::make('slug')
        ->label(__('filament-panels::product.slug') . " ($locale)")
        ->required()
        ->unique(
          table: ProductTranslation::class,
          column: 'slug',
          // ignore: fn ($record) => $record?->translations->firstWhere('locale', $locale)?->id,
          // where: fn ($query) => $query->where('locale', $locale)
        )
        ->maxLength(255),

      TextInput::make('meta_title')
        ->label(__('filament-panels::product.meta_title') . " ($locale)")
        ->maxLength(255),

      Textarea::make('meta_description')
        ->label(__('filament-panels::product.meta_description') . " ($locale)")
        ->columnSpanFull(),
    ];
  }
}
