<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1728123ce4b84a94466060719064d9b6
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NinjaForms\\NinjaForms\\' => 22,
            'NinjaForms\\Includes\\' => 20,
            'NinjaForms\\Blocks\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NinjaForms\\NinjaForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'NinjaForms\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'NinjaForms\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocks/views/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1728123ce4b84a94466060719064d9b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1728123ce4b84a94466060719064d9b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1728123ce4b84a94466060719064d9b6::$classMap;

        }, null, ClassLoader::class);
    }
}
