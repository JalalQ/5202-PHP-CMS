<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc71aba0fe8bca77f827eb8f7034368b6
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lab7\\models\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lab7\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc71aba0fe8bca77f827eb8f7034368b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc71aba0fe8bca77f827eb8f7034368b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc71aba0fe8bca77f827eb8f7034368b6::$classMap;

        }, null, ClassLoader::class);
    }
}
