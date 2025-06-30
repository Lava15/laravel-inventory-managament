<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Pages\ViewProduct;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Schemas\ProductInfolist;
use App\Filament\Resources\Products\Tables\ProductsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Moduels\Catalog\Models\Product;

class ProductResource extends Resource
{
  protected static ?string $model = Product::class;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
  protected static ?int $navigationSort = 3;

  public static function getNavigationLabel(): string
  {
    return __('filament-panels::product.products');
  }

  public static function getModelLabel(): string
  {
    return __('filament-panels::product.products');
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
    return ProductForm::configure($schema);
  }

  public static function infolist(Schema $schema): Schema
  {
    return ProductInfolist::configure($schema);
  }

  public static function table(Table $table): Table
  {
    return ProductsTable::configure($table);
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
      'index' => ListProducts::route('/'),
      'create' => CreateProduct::route('/create'),
      'view' => ViewProduct::route('/{record}'),
      'edit' => EditProduct::route('/{record}/edit'),
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
