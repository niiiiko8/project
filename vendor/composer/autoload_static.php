<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ee257a417c04e7ad0b54dd0d3f0b81e
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ee257a417c04e7ad0b54dd0d3f0b81e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ee257a417c04e7ad0b54dd0d3f0b81e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ee257a417c04e7ad0b54dd0d3f0b81e::$classMap;

        }, null, ClassLoader::class);
    }
}
