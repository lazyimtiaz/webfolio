<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('heading')
                    ->required(),
                Textarea::make('body')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('abouts'),
                Textarea::make('motto')
                    ->default(null)
                    ->columnSpanFull(),
                MarkdownEditor::make('info')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
