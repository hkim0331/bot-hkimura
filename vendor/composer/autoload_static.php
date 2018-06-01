<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14f9e2d277992e053e6699a6942b8e81
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14f9e2d277992e053e6699a6942b8e81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14f9e2d277992e053e6699a6942b8e81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
