<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf549546b4355f8b4095bbd78fea2d9a0
{
    public static $files = array (
        'd77f82b0a7d25d4b8a866d5774eb406c' => __DIR__ . '/../..' . '/src/Fonctions/fonctions.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf549546b4355f8b4095bbd78fea2d9a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf549546b4355f8b4095bbd78fea2d9a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf549546b4355f8b4095bbd78fea2d9a0::$classMap;

        }, null, ClassLoader::class);
    }
}
