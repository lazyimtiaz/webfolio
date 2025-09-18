<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\MarkdownEditor;

class ProjectForm
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
                    ->directory('projects'),
                TagsInput::make('tags')   // <-- JSON column in your model
                    ->label('Tags')
                    ->placeholder('Add a tag')
                     ->separator(','), // optional 
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
