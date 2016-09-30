<?php

if (!class_exists('Medz\\Component\\Filesystem\\Filesystem')) {
    require file_exists(__DIR__.'/../../../autoload.php')
        ? __DIR__.'/../../../autoload.php'
        : __DIR__.'/../vendor/autoload.php';
}
