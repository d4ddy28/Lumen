<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcf99b13c0bc2ebc356dd1ecb8559c26
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcf99b13c0bc2ebc356dd1ecb8559c26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcf99b13c0bc2ebc356dd1ecb8559c26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbcf99b13c0bc2ebc356dd1ecb8559c26::$classMap;

        }, null, ClassLoader::class);
    }
}
