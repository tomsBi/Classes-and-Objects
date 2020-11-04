<?php

namespace App\Exercise8;

class Formatter
{
    public static function moneyFormatter($amount): string
    {
        return '$' . number_format($amount,2,'.', ',');
    }
}