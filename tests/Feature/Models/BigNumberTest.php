<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Tests\Feature\Models;

use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('orders by the sort column with the empty ones last', function (): void {
    BigNumber::factory()->create(['sort' => null, 'big_number' => '100+']);
    BigNumber::factory()->create(['sort' => 2, 'big_number' => '200+']);
    BigNumber::factory()->create(['sort' => 1, 'big_number' => '300+']);

    expect(BigNumber::query()->sort()->pluck('big_number')->all())->toBe(['300+', '200+', '100+']);
});
