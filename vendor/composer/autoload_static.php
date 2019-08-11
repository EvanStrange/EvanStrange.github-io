<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5631cf3e7e0de0ab2ec91c2d0b364929
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5631cf3e7e0de0ab2ec91c2d0b364929::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5631cf3e7e0de0ab2ec91c2d0b364929::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
