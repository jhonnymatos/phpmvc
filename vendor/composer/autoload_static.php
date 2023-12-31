<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbed971888a191f41d350d4855b935177
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbed971888a191f41d350d4855b935177::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbed971888a191f41d350d4855b935177::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbed971888a191f41d350d4855b935177::$classMap;

        }, null, ClassLoader::class);
    }
}
