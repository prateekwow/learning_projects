<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73c456902f1f061e68c10f21d9c8b056
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit73c456902f1f061e68c10f21d9c8b056::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73c456902f1f061e68c10f21d9c8b056::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73c456902f1f061e68c10f21d9c8b056::$classMap;

        }, null, ClassLoader::class);
    }
}
