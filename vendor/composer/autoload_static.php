<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef4a13573c6df330c2253300e77a3987
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hellframco\\P14\\' => 15,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hellframco\\P14\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef4a13573c6df330c2253300e77a3987::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef4a13573c6df330c2253300e77a3987::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef4a13573c6df330c2253300e77a3987::$classMap;

        }, null, ClassLoader::class);
    }
}
