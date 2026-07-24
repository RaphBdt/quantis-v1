<?php

namespace App\Enums;

enum AssetType: string
{
    case CASH = 'cash';
    case REAL_ESTATE = 'real_estate';
    case STOCKS = 'stocks';
    case CRYPTOCURRENCY = 'cryptocurrency';
    case OTHER = 'other';

    public function label(): string
    {
        return match($this) {
            self::CASH => 'Cash',
            self::REAL_ESTATE => 'Real estate',
            self::STOCKS => 'Stocks',
            self::CRYPTOCURRENCY => 'Cryptocurrency',
            self::OTHER => 'Other',
        };
    }

    public static function options(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn(self $case) => $case->label(), self::cases())
        );
    }
}
