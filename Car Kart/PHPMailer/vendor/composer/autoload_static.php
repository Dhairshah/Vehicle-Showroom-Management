<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac5c8558fecd08a53bf1e58998edb36a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac5c8558fecd08a53bf1e58998edb36a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac5c8558fecd08a53bf1e58998edb36a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
