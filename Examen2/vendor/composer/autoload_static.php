<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4d3f1b96345c33e879e359e7841dd4b
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4d3f1b96345c33e879e359e7841dd4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4d3f1b96345c33e879e359e7841dd4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4d3f1b96345c33e879e359e7841dd4b::$classMap;

        }, null, ClassLoader::class);
    }
}
