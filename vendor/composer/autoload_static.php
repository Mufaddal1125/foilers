<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b8109b72a0a30be2e7b626164de8bda
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b8109b72a0a30be2e7b626164de8bda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b8109b72a0a30be2e7b626164de8bda::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
