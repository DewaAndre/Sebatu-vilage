<?php

$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'false';

$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';

require __DIR__ . '/../public/index.php';
