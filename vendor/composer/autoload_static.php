<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6c915338ba7097e1b04b0b4e40cb65d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Biplob192\\CrudGenerator\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Biplob192\\CrudGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6c915338ba7097e1b04b0b4e40cb65d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6c915338ba7097e1b04b0b4e40cb65d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6c915338ba7097e1b04b0b4e40cb65d::$classMap;

        }, null, ClassLoader::class);
    }
}
