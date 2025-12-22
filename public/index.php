<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrap app
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// HANDLE REQUEST MANUAL (WAJIB UNTUK VERCEL)
$request = Request::capture();
$response = $app->handle($request);

// ⛔ INI YANG KEMARIN HILANG
$response->send();

$app->terminate($request, $response);
