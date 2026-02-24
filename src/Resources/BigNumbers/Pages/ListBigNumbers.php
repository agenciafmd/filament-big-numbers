<?php

namespace Agenciafmd\BigNumbers\Resources\BigNumbers\Pages;

use Agenciafmd\BigNumbers\Resources\BigNumbers\BigNumberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBigNumbers extends ListRecords
{
    protected static string $resource = BigNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
