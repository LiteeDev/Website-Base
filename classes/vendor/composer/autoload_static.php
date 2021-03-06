<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b5ba88da47d58453f699cdd6d0a1e85
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b5ba88da47d58453f699cdd6d0a1e85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b5ba88da47d58453f699cdd6d0a1e85::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
