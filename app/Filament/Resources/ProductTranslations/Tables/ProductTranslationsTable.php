<?php

namespace App\Filament\Resources\ProductTranslations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductTranslationsTable
{
  public static function configure(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('product_id')
          ->label(__('filament-panels::product.product_id'))
          ->searchable(),
        TextColumn::make('name')
          ->label(__('filament-panels::product.product_name'))
          ->searchable(),
        TextColumn::make('locale')
          ->label(__('filament-panels::product.product_locale'))
          ->searchable(),
        TextColumn::make('slug')
          ->label('Slug')
          ->searchable(),
        TextColumn::make('meta_title')
          ->searchable(),
      ])
      ->filters([
        TrashedFilter::make(),
      ])
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
