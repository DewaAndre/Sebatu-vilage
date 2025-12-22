<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrap app
$app = require_once __DIR__.'/../bootstrap/app.php';

$request = Request::capture();
$response = $app->handle($request);

/*
|--------------------------------------------------------------------------
| 🔥 PAKSA CONTENT-TYPE HTML (WAJIB UNTUK VERCEL)
|--------------------------------------------------------------------------
*/
$response->headers->set('Content-Type', 'text/html; charset=UTF-8');

/*
|--------------------------------------------------------------------------
| SEND RESPONSE
|--------------------------------------------------------------------------
*/
$response->send();
$app->terminate($request, $response);
