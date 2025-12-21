<?php

$_ENV['APP_CONFIG_CACHE'] = null;
$_ENV['APP_SERVICES_CACHE'] = null;
$_ENV['APP_PACKAGES_CACHE'] = null;
$_ENV['APP_ROUTES_CACHE'] = null;
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

require __DIR__ . '/../public/index.php';
