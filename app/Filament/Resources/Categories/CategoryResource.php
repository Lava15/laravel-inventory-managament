<?php

namespace App\Filament\Resources\Categories;

use App\Filament\Resources\Categories\Pages\CreateCategory;
use App\Filament\Resources\Categories\Pages\EditCategory;
use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Filament\Resources\Categories\Pages\ViewCategory;
use App\Filament\Resources\Categories\RelationManagers\TranslationsRelationManager;
use App\Filament\Resources\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Categories\Schemas\CategoryInfolist;
use App\Filament\Resources\Categories\Tables\CategoriesTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Catalog\Models\Category;

class CategoryResource extends Resource
{
  protected static ?string $model = Category::class;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboard;
  protected static ?int $navigationSort = 2;

  public static function getNavigationLabel(): string
  {
    return __('filament-panels::category.categories');
  }

  public static function getModelLabel(): string
  {
    return __('filament-panels::category.categories');
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
    return CategoryForm::configure($schema);
  }

  public static function infolist(Schema $schema): Schema
  {
    return CategoryInfolist::configure($schema);
  }

  public static function table(Table $table): Table
  {
    return CategoriesTable::configure($table);
  }

  public static function getRelations(): array
  {
    return [
      TranslationsRelationManager::class,
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => ListCategories::route('/'),
      'create' => CreateCategory::route('/create'),
      'view' => ViewCategory::route('/{record}'),
      'edit' => EditCategory::route('/{record}/edit'),
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
