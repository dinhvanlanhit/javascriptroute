<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9cf06291d524f5326e5db37aae04f64
{
    public static $files = array (
        '0dfd3b9a783913339e4c728b51759e2f' => __DIR__ . '/../..' . '/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jsroute\\Javascriptroute\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jsroute\\Javascriptroute\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9cf06291d524f5326e5db37aae04f64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9cf06291d524f5326e5db37aae04f64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9cf06291d524f5326e5db37aae04f64::$classMap;

        }, null, ClassLoader::class);
    }
}
