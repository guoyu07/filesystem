<?php

include dirname(__FILE__) . '/../vendor/autoload.php';

use Medz\Component\Filesystem\Filesystem;

Filesystem::touch('test-touch.file');
