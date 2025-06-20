<?php

namespace App\Filament\Resources\Categories\RelationManagers;

use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\DissociateBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\Categories\Schemas\CategoryForm;
use App\Filament\Resources\CategoryTranslations\Schemas\CategoryTranslationForm;

class TranslationsRelationManager extends RelationManager
{
  protected static string $relationship = 'translations';

  public function form(Schema $schema): Schema
  {
    return CategoryTranslationForm::configure($schema);
  }

  public function infolist(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextEntry::make('slug'),
        TextEntry::make('locale'),
        TextEntry::make('name'),
        TextEntry::make('meta_title'),
        TextEntry::make('meta_description'),
        TextEntry::make('meta_robots'),
        TextEntry::make('meta_canonical'),
        ImageEntry::make('meta_image'),
        TextEntry::make('deleted_at')
          ->dateTime(),
        TextEntry::make('created_at')
          ->dateTime(),
        TextEntry::make('updated_at')
          ->dateTime(),
      ]);
  }

  public function table(Table $table): Table
  {
    return $table
      ->recordTitleAttribute('name')
      ->columns([
        TextColumn::make('slug')
          ->searchable(),
        TextColumn::make('locale')
          ->searchable(),
        TextColumn::make('name')
          ->searchable(),
        TextColumn::make('meta_title')
          ->searchable(),
        TextColumn::make('meta_description')
          ->searchable(),
        TextColumn::make('meta_robots')
          ->searchable(),
        TextColumn::make('meta_canonical')
          ->searchable(),
        ImageColumn::make('meta_image'),
        TextColumn::make('deleted_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        TextColumn::make('created_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        TextColumn::make('updated_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
      ])
      ->filters([
        TrashedFilter::make(),
      ])
      ->headerActions([
        CreateAction::make(),
        AssociateAction::make(),
      ])
      ->recordActions([
        ViewAction::make(),
        EditAction::make(),
        DissociateAction::make(),
        DeleteAction::make(),
        ForceDeleteAction::make(),
        RestoreAction::make(),
      ])
      ->toolbarActions([
        BulkActionGroup::make([
          DissociateBulkAction::make(),
          DeleteBulkAction::make(),
          ForceDeleteBulkAction::make(),
          RestoreBulkAction::make(),
        ]),
      ])
      ->modifyQueryUsing(fn(Builder $query) => $query
        ->withoutGlobalScopes([
          SoftDeletingScope::class,
        ]));
  }
}
