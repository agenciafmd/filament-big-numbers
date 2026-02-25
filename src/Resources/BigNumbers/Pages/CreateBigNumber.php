<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Resources\BigNumbers\Pages;

use Agenciafmd\Admix\Resources\Concerns\RedirectBack;
use Agenciafmd\BigNumbers\Resources\BigNumbers\BigNumberResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateBigNumber extends CreateRecord
{
    use RedirectBack;

    protected static string $resource = BigNumberResource::class;
}
