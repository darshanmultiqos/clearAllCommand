<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f539e57137bce872bd3da0092b07d26
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Multiqos\\Clearall\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Multiqos\\Clearall\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f539e57137bce872bd3da0092b07d26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f539e57137bce872bd3da0092b07d26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f539e57137bce872bd3da0092b07d26::$classMap;

        }, null, ClassLoader::class);
    }
}