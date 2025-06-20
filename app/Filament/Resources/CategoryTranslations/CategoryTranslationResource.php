<?php

namespace App\Filament\Resources\CategoryTranslations;

use App\Filament\Resources\CategoryTranslations\Pages\CreateCategoryTranslation;
use App\Filament\Resources\CategoryTranslations\Pages\EditCategoryTranslation;
use App\Filament\Resources\CategoryTranslations\Pages\ListCategoryTranslations;
use App\Filament\Resources\CategoryTranslations\Pages\ViewCategoryTranslation;
use App\Filament\Resources\CategoryTranslations\Schemas\CategoryTranslationForm;
use App\Filament\Resources\CategoryTranslations\Schemas\CategoryTranslationInfolist;
use App\Filament\Resources\CategoryTranslations\Tables\CategoryTranslationsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Catalog\Models\CategoryTranslation;

class CategoryTranslationResource extends Resource
{
    protected static ?string $model = CategoryTranslation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
  protected static ?int $navigationSort = 3;

  public static function getNavigationLabel(): string
  {
    return __('filament-panels::category.category_translations');
  }

  public static function getModelLabel(): string
  {
    return __('filament-panels::category.category_translation');
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
        return CategoryTranslationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategoryTranslationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryTranslationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
          
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategoryTranslations::route('/'),
            'create' => CreateCategoryTranslation::route('/create'),
            'view' => ViewCategoryTranslation::route('/{record}'),
            'edit' => EditCategoryTranslation::route('/{record}/edit'),
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
