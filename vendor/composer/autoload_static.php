<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd8708d0f85939413372f17dcce0e045
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Touhid\\MillionToBdt\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Touhid\\MillionToBdt\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd8708d0f85939413372f17dcce0e045::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd8708d0f85939413372f17dcce0e045::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd8708d0f85939413372f17dcce0e045::$classMap;

        }, null, ClassLoader::class);
    }
}
