<?php

use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

/** @var Illuminate\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap/app.php';

$request = Request::capture();
$response = $app->handle($request);

/**
 * 🔥 WAJIB DI VERCEL
 * RETURN response, BUKAN echo / send
 */
return $response;
