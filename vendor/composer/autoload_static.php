<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2cfe36c657bf9a70803d06cd94e0f02
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Angelica\\HelloPackage\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Angelica\\HelloPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2cfe36c657bf9a70803d06cd94e0f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2cfe36c657bf9a70803d06cd94e0f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2cfe36c657bf9a70803d06cd94e0f02::$classMap;

        }, null, ClassLoader::class);
    }
}