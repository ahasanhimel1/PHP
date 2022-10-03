<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc062784d71c99e1add0c9651a46b466
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc062784d71c99e1add0c9651a46b466::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc062784d71c99e1add0c9651a46b466::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc062784d71c99e1add0c9651a46b466::$classMap;

        }, null, ClassLoader::class);
    }
}
