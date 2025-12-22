<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Composer
require __DIR__.'/../vendor/autoload.php';

// Bootstrap
$app = require_once __DIR__.'/../bootstrap/app.php';

// IMPORTANT: gunakan Kernel, BUKAN $app->handle()
$kernel = $app->make(Kernel::class);

$request = Request::capture();
$response = $kernel->handle($request);

// WAJIB
$response->send();

// Terminate
$kernel->terminate($request, $response);
