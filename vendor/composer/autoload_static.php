<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51e7c3ffb88f1822c104233d65f40856
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51e7c3ffb88f1822c104233d65f40856::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51e7c3ffb88f1822c104233d65f40856::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
