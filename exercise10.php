<?php

require_once 'vendor/autoload.php';

use App\Exercise10\Application;
use App\Exercise10\VideoStore;

$store = new VideoStore();

$app = new Application($store);
$app->run();

