<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ed303853ebe42fb345e138a924d3423
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecommerce\\Cart\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecommerce\\Cart\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ed303853ebe42fb345e138a924d3423::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ed303853ebe42fb345e138a924d3423::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ed303853ebe42fb345e138a924d3423::$classMap;

        }, null, ClassLoader::class);
    }
}