<?php

namespace Agenciafmd\BigNumbers\Resources\BigNumbers\Pages;

use Agenciafmd\Admix\Resources\Concerns\RedirectBack;
use Agenciafmd\BigNumbers\Resources\BigNumbers\BigNumberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditBigNumber extends EditRecord
{
    use RedirectBack;

    protected static string $resource = BigNumberResource::class;

    protected $listeners = [
        'auditRestored',
    ];

    public function getRelationManagers(): array
    {
        if ($this->record->trashed()) {
            return [];
        }

        return parent::getRelationManagers();
    }

    public function auditRestored(): void
    {
        $this->fillForm();
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
