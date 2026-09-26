<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Resources\BigNumbers\Pages;

use Agenciafmd\Admix\Resources\Concerns\RedirectBack;
use Agenciafmd\BigNumbers\Models\BigNumber;
use Agenciafmd\BigNumbers\Resources\BigNumbers\BigNumberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

final class EditBigNumber extends EditRecord
{
    use RedirectBack;

    protected static string $resource = BigNumberResource::class;

    /**
     * @var array<int, string>
     */
    protected $listeners = [
        'auditRestored',
    ];

    public function getRelationManagers(): array
    {
        $record = $this->getRecord();

        if ($record instanceof BigNumber && $record->trashed()) {
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
