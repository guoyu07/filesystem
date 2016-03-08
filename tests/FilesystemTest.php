<?php

namespace Medz\Component\Filesystem\Tests;

use PHPUnit_Framework_TestCase;
use Medz\Component\Filesystem\Filesystem;

/**
 * 文件系统测试套件
 *
 * @package Medz\Component\Filesystem\Tests\FilesystemTest
 * @author Seven Du <lovevipdsw@outlook.com>
 **/
class FilesystemTest extends PHPUnit_Framework_TestCase
{
    protected static $file;

    protected function setUp()
    {
        static::$file = __DIR__ . '/test.file';
    }

    public function testPut()
    {
        Filesystem::put(static::$file, 'The is a test content.');
        $this->assertFileExists(static::$file);
    }

    public function testExists()
    {
        $this->assertEquals(true, Filesystem::exists(static::$file));
    }

    public function testDelete()
    {
        $this->assertEquals(true, Filesystem::delete(static::$file));
    }

} // END class FilesystemTest extends PHPUnit_Framework_TestCase
