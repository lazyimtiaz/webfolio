<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\MarkdownEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('body')
                    ->default(null)
                    ->columnSpanFull(),
                MarkdownEditor::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                 FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('services'),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
