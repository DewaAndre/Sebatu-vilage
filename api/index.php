<?php

// ===== FORCE ENV (Vercel does NOT load .env) =====
$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = false;
$_SERVER['APP_DEBUG'] = false;

// WAJIB: APP_KEY harus ada
$_ENV['APP_KEY'] = 'base64:yYSWcePz5gR9Bi7eLgK+cg6Egof8YyKyIHZ03N9nwYo=';

// Disable error view system
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Prevent Laravel from rendering error views
$_SERVER['LARAVEL_START'] = microtime(true);

// Boot Laravel
require __DIR__ . '/../public/index.php';
