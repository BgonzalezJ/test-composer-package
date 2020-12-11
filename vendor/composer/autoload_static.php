<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit150635edeb858d56252145745f1f40cc
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BgonzalezJ\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BgonzalezJ\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit150635edeb858d56252145745f1f40cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit150635edeb858d56252145745f1f40cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit150635edeb858d56252145745f1f40cc::$classMap;

        }, null, ClassLoader::class);
    }
}
