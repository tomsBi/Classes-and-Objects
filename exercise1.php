<?php

require_once 'vendor/autoload.php';

use App\Exercise1\Product;
use App\Exercise1\Formatter;

$mouse = new Product('Logitech mouse', 7000, 14);
$iPhone = new Product('Iphone 5s', 99999, 3);
$epson = new Product('Epson EB-U05', 44046, 1);

echo $mouse->name() . ', price ' . Formatter::moneyFormatter($mouse->price()) . ', amount ' . $mouse->amount();
echo PHP_EOL;
echo $iPhone->name() . ', price ' . Formatter::moneyFormatter($iPhone->price()) . ', amount ' . $iPhone->amount();
echo PHP_EOL;
echo $epson->name() . ', price ' . Formatter::moneyFormatter($epson->price()) . ', amount ' . $epson->amount();
echo PHP_EOL;

$mouse->setAmount(10);
$iPhone->setPrice(55555);

echo 'amount ' . $mouse->amount();
echo PHP_EOL;
echo 'price ' . Formatter::moneyFormatter($iPhone->price());
