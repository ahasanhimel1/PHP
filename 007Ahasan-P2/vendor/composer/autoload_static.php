<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3eecf96b9aa599f6d597ae5f361cd32c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3eecf96b9aa599f6d597ae5f361cd32c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3eecf96b9aa599f6d597ae5f361cd32c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3eecf96b9aa599f6d597ae5f361cd32c::$classMap;

        }, null, ClassLoader::class);
    }
}
