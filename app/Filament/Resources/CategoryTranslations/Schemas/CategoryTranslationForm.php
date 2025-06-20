<?php

namespace App\Filament\Resources\CategoryTranslations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoryTranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label(__('filament-panels::category.parent_category'))
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('locale')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                TextInput::make('meta_robots')
                    ->required()
                    ->default('index, follow'),
                TextInput::make('meta_canonical'),
                FileUpload::make('meta_image')
                    ->image(),
            ]);
    }
}
