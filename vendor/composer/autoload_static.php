<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd2d2ef5bfdcb4758925f9f801a08c57
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'comFunc\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'comFunc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd2d2ef5bfdcb4758925f9f801a08c57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd2d2ef5bfdcb4758925f9f801a08c57::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
