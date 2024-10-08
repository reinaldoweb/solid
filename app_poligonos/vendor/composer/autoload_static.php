<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e402dd4b7b1142b35aa3fecb0a956e2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e402dd4b7b1142b35aa3fecb0a956e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e402dd4b7b1142b35aa3fecb0a956e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e402dd4b7b1142b35aa3fecb0a956e2::$classMap;

        }, null, ClassLoader::class);
    }
}
