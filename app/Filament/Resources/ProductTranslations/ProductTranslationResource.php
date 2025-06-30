<?php

namespace App\Filament\Resources\ProductTranslations;

use App\Filament\Resources\ProductTranslations\Pages\CreateProductTranslation;
use App\Filament\Resources\ProductTranslations\Pages\EditProductTranslation;
use App\Filament\Resources\ProductTranslations\Pages\ListProductTranslations;
use App\Filament\Resources\ProductTranslations\Pages\ViewProductTranslation;
use App\Filament\Resources\ProductTranslations\Schemas\ProductTranslationForm;
use App\Filament\Resources\ProductTranslations\Schemas\ProductTranslationInfolist;
use App\Filament\Resources\ProductTranslations\Tables\ProductTranslationsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Catalog\Models\ProductTranslation;

class ProductTranslationResource extends Resource
{
  protected static ?string $model = ProductTranslation::class;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
  protected static ?int $navigationSort = 4;

  public static function getNavigationLabel(): string
  {
    return __('filament-panels::product.product_translations');
  }

  public static function getModelLabel(): string
  {
    return __('filament-panels::product.product_translations');
  }

  public static function getPluralLabel(): ?string
  {
    return static::getNavigationLabel();
  }

  public static function getNavigationGroup(): ?string
  {
    return __('filament-panels::general.catalog');
  }

  public static function form(Schema $schema): Schema
  {
    return ProductTranslationForm::configure($schema);
  }

  public static function infolist(Schema $schema): Schema
  {
    return ProductTranslationInfolist::configure($schema);
  }

  public static function table(Table $table): Table
  {
    return ProductTranslationsTable::configure($table);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => ListProductTranslations::route('/'),
      'create' => CreateProductTranslation::route('/create'),
      'view' => ViewProductTranslation::route('/{record}'),
      'edit' => EditProductTranslation::route('/{record}/edit'),
    ];
  }

  public static function getEloquentQuery(): Builder
  {
    return parent::getEloquentQuery()
      ->withoutGlobalScopes([
        SoftDeletingScope::class,
      ]);
  }
}
