<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Services;

use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Database\Eloquent\Builder;

final class BigNumberService
{
    public static function make(): static
    {
        return app(self::class);
    }

    private function queryBuilder(): Builder
    {
        return BigNumber::query();
    }
}
