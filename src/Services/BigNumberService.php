<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Services;

final class BigNumberService
{
    public static function make(): static
    {
        return resolve(self::class);
    }
}
