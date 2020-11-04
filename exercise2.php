<?php
require_once 'vendor/autoload.php';

use App\Exercise2\Point;

$p1 = new Point(5,2);
$p2 = new Point(-3,6);

function swapPoints(&$x, &$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
swapPoints($p1,$p2);

echo '(' . $p1->x() . ',' . $p1->y() . ')';
echo PHP_EOL;
echo '(' . $p2->x() . ',' . $p2->y() . ')';
