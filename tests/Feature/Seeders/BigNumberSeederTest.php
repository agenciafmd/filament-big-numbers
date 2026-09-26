<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Tests\Feature\Seeders;

use Agenciafmd\BigNumbers\Database\Seeders\BigNumberSeeder;
use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use function Pest\Laravel\seed;

uses(TestCase::class, RefreshDatabase::class);

it('seeds the big numbers from the factory', function (): void {
    seed(BigNumberSeeder::class);

    expect(BigNumber::query()->count())->toBe(10);
});
