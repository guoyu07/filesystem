<?php

namespace Medz\Component\Filesystem;

use Illuminate\Filesystem\Filesystem as IlluminateFilesystem;

/**
 * 静态方法重载Illuminate\Filesystem\Filesystem中的方法，使用单例。
 * 避免性能浪费.
 *
 * @author Seven Du <lovevipdsw@outlook.com>
 **/
class Filesystem
{
    /**
     * 储存文件系统对象
     *
     * @var Symfony\Component\Filesystem\Filesystem
     **/
    protected static $filesystem;

    /**
     * 工具静态方法重载文件系统方法.
     *
     * @return miexd
     *
     * @author Seven Du <lovevipdsw@outlook.com>
     **/
    public static function __callStatic($name, array $arguments)
    {
        if (!(self::$filesystem instanceof IlluminateFilesystem)) {
            self::$filesystem = new IlluminateFilesystem();
        }

        return call_user_func_array([self::$filesystem, $name], $arguments);
    }
} // END class Filesystem
