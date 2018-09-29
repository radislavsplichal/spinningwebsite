<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6fbe5343d93283265620eb3dd583a1d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CMSCore\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CMSCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/CMSCore',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6fbe5343d93283265620eb3dd583a1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6fbe5343d93283265620eb3dd583a1d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
