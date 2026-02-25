<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers;

use Agenciafmd\BigNumbers\Resources\BigNumbers\BigNumberResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

final class BigNumbersPlugin implements Plugin
{
    public static function make(): static
    {
        return app(self::class);
    }

    public function getId(): string
    {
        return 'big-numbers';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                BigNumberResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
