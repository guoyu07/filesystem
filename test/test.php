<?php

include dirname(__FILE__) . '/../vendor/autoload.php';

use Medz\Component\Filesystem\Filesystem;

Filesystem::copyDirectory('./1', './2');
