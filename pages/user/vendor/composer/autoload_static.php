<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf96f11aad4a1eb4b2fcc2f3ace9da4b4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf96f11aad4a1eb4b2fcc2f3ace9da4b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf96f11aad4a1eb4b2fcc2f3ace9da4b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
