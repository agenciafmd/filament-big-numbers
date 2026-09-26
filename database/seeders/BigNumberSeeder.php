<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Database\Seeders;

use Agenciafmd\BigNumbers\Database\Factories\BigNumberFactory;
use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Database\Seeder;

final class BigNumberSeeder extends Seeder
{
    public function run(): void
    {
        BigNumber::query()
            ->truncate();

        BigNumberFactory::new()
            ->count(10)
            ->create();
    }
}
