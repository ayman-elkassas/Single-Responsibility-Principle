<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita337465ec0a0cea9ec80029315116fa0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita337465ec0a0cea9ec80029315116fa0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita337465ec0a0cea9ec80029315116fa0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
