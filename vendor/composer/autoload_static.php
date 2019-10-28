<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce99d30f920d6a92e376569e3e211b0d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitce99d30f920d6a92e376569e3e211b0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce99d30f920d6a92e376569e3e211b0d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
