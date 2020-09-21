<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe40bba5dd72bf51d93fb94c26f7a3b1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe40bba5dd72bf51d93fb94c26f7a3b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe40bba5dd72bf51d93fb94c26f7a3b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
