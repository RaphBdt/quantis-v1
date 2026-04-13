<?php

namespace App\Enums;

enum AssetType: string
{
    case CASH = 'cash';
    case REAL_ESTATE = 'real_estate';
    case STOCKS = 'stocks';
    case CRYPTOCURRENCY = 'cryptocurrency';
    case OTHER = 'other';
}
