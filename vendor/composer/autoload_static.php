<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c7a6841eeddd4397f7a8d831519dd3a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Delight\\Db\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Delight\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/db/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c7a6841eeddd4397f7a8d831519dd3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c7a6841eeddd4397f7a8d831519dd3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c7a6841eeddd4397f7a8d831519dd3a::$classMap;

        }, null, ClassLoader::class);
    }
}
