<?php

namespace App\Filament\Resources\Categories\RelationManagers;

use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\CategoryTranslations\Schemas\CategoryTranslationForm;
use App\Filament\Resources\CategoryTranslations\Schemas\CategoryTranslationInfolist;
use App\Filament\Resources\CategoryTranslations\Tables\CategoryTranslationsTable;

class TranslationsRelationManager extends RelationManager
{
  protected static string $relationship = 'translations';

  public function form(Schema $schema): Schema
  {
    return CategoryTranslationForm::configure($schema);
  }

  public function infolist(Schema $schema): Schema
  {
    return CategoryTranslationInfolist::configure($schema);
  }

  public function table(Table $table): Table
  {
    return CategoryTranslationsTable::configure($table);
  }
}
