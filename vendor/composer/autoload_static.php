<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc7495443cf7d403ef9bbcba97a46663
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc7495443cf7d403ef9bbcba97a46663::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc7495443cf7d403ef9bbcba97a46663::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc7495443cf7d403ef9bbcba97a46663::$classMap;

        }, null, ClassLoader::class);
    }
}
