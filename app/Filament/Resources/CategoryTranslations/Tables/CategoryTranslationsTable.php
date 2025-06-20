<?php

namespace App\Filament\Resources\CategoryTranslations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class CategoryTranslationsTable
{
  public static function configure(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('category.name')
          ->label(__('filament-panels::category.parent_category'))
          ->searchable(),
        TextColumn::make('slug')
          ->label('Slug')
          ->searchable(),
        TextColumn::make('locale')
          ->label(__('filament-panels::category.category_locale'))
          ->searchable(),
        TextColumn::make('name')
          ->label(__('filament-panels::category.category_name'))
          ->searchable(),
      ])
      ->filters([
        TrashedFilter::make(),
      ])
      ->inverseRelationship('category')
      ->recordActions([
        ViewAction::make(),
        EditAction::make(),
      ])
      ->toolbarActions([
        BulkActionGroup::make([
          DeleteBulkAction::make(),
          ForceDeleteBulkAction::make(),
          RestoreBulkAction::make(),
        ]),
      ]);
  }
}
