<?php

chdir(dirname(__DIR__));

include './vendor/autoload.php';

$env = trim(file_get_contents('./ENV'));
$configCache = $env === 'development' ? null : './data/cache/config.php';

Phapp\Application\Bootstrap::init($env, $configCache)->runApplicationOn($_SERVER);
