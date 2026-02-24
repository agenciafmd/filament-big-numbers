<?php

namespace Agenciafmd\BigNumbers\Resources\BigNumbers\Schemas;

use Agenciafmd\Admix\Resources\Infolists\Components\DateTimeEntry;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

final class BigNumberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('General'))
                    ->schema([
                        TextInput::make('big_number')
                            ->translateLabel()
                            ->autofocus()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('description')
                            ->translateLabel()
                            ->required()
                            ->maxLength(255),
//                        TextInput::make('sort')
//                            ->translateLabel()
//                            ->numeric(),
                    ])
                    ->collapsible()
                    ->columns()
                    ->columnSpan(2),
                Section::make(__('Information'))
                    ->schema([
                        Toggle::make('is_active')
                            ->translateLabel()
                            ->default(true),
                        DateTimeEntry::make('created_at'),
                        DateTimeEntry::make('updated_at'),
                    ])
                    ->collapsible()
                    ->columns(),
            ])
            ->columns(3);
    }
}
