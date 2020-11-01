<?php

namespace App\Exercise9;

class Formatter
{
    public static function formatter($amount)
    {
        return number_format(abs($amount/100), 2);
    }
}