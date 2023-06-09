<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19af0922a6552f2c256d8a2a08b9edac
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit19af0922a6552f2c256d8a2a08b9edac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19af0922a6552f2c256d8a2a08b9edac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19af0922a6552f2c256d8a2a08b9edac::$classMap;

        }, null, ClassLoader::class);
    }
}
