<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                TextInput::make('timeline')
                    ->default(null),
                TagsInput::make('objectives') // <-- multiple objectives
                    ->label('Objectives')
                    ->placeholder('Add an objective')
                    ->separator(','), 
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
