<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Database\Factories;

use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

final class BigNumberFactory extends Factory
{
    protected $model = BigNumber::class;

    public function definition(): array
    {
        return [
            'is_active' => fake()->boolean(),
            'big_number' => fake()->numberBetween(100, 10000) . '+',
            'description' => fake()->sentence(4),
            'sort' => fake()->numberBetween(1, 100),
        ];
    }
}
