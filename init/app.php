<?php

use Zan\Framework\Foundation\Application;

require __DIR__ . '/../vendor/autoload.php';

$appName = 'eastwind-io';
$rootPath = realpath(__DIR__.'/../');

$app = new Application($appName, $rootPath);

return $app;
