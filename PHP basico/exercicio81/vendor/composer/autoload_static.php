<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita01cb97879bc9593320bd9292a08d63e
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'exercicio81\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'exercicio81\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita01cb97879bc9593320bd9292a08d63e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita01cb97879bc9593320bd9292a08d63e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita01cb97879bc9593320bd9292a08d63e::$classMap;

        }, null, ClassLoader::class);
    }
}
