<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa026fd93390b7e7a8fd7f84c7313bea
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa026fd93390b7e7a8fd7f84c7313bea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa026fd93390b7e7a8fd7f84c7313bea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
