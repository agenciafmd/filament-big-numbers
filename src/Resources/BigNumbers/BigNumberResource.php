<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Resources\BigNumbers;

use Agenciafmd\BigNumbers\Models\BigNumber;
use Agenciafmd\BigNumbers\Resources\BigNumbers\Pages\CreateBigNumber;
use Agenciafmd\BigNumbers\Resources\BigNumbers\Pages\EditBigNumber;
use Agenciafmd\BigNumbers\Resources\BigNumbers\Pages\ListBigNumbers;
use Agenciafmd\BigNumbers\Resources\BigNumbers\Schemas\BigNumberForm;
use Agenciafmd\BigNumbers\Resources\BigNumbers\Tables\BigNumbersTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

final class BigNumberResource extends Resource
{
    protected static ?string $model = BigNumber::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHashtag;

    protected static ?int $navigationSort = 8;

    protected static ?string $recordTitleAttribute = 'big_number';

    public static function getModelLabel(): string
    {
        return __('Big Number');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Big Numbers');
    }

    public static function form(Schema $schema): Schema
    {
        return BigNumberForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BigNumbersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            AuditsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBigNumbers::route('/'),
            'create' => CreateBigNumber::route('/create'),
            'edit' => EditBigNumber::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
