<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductsTable
{
  public static function configure(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('name')
          ->label(__('filament-panels::product.product_name'))
          ->searchable(),
        TextColumn::make('description')
          ->label(__('filament-panels::product.product_description'))
          ->searchable(),
        TextColumn::make('slug')
          ->label('Slug')
          ->searchable(),
        TextColumn::make('status')
          ->label(__('filament-panels::product.product_status'))
          ->searchable(),
        TextColumn::make('base_price')
          ->label(__('filament-panels::product.product_price'))
          ->money('UZS')
          ->sortable(),
        TextColumn::make('order')
          ->label(__('filament-panels::product.product_order'))
          ->numeric()
          ->sortable(),
        IconColumn::make('is_active')
          ->label(__('filament-panels::general.is_active'))
          ->boolean(),
        IconColumn::make('is_featured')
          ->label(__('filament-panels::general.is_featured'))
          ->boolean(),
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
