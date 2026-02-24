<?php

namespace Agenciafmd\BigNumbers\Models;

use Agenciafmd\BigNumbers\Database\Factories\BigNumberFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

#[UseFactory(BigNumberFactory::class)]
class BigNumber extends Model implements AuditableContract
{
    use Auditable, HasFactory, Prunable, SoftDeletes;

    public function prunable(): Builder
    {
        return self::query()
            ->where('deleted_at', '<=', now()->subDays(30));
    }

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort' => 'integer',
        ];
    }
}
