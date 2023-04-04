<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9940f20a6fded08a8148956deb4ff79
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'O' => 
        array (
            'OmnivaTarptautinesWoo\\' => 22,
            'OmnivaApi\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'OmnivaTarptautinesWoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'OmnivaApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/omniva/api-lib/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9940f20a6fded08a8148956deb4ff79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9940f20a6fded08a8148956deb4ff79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9940f20a6fded08a8148956deb4ff79::$classMap;

        }, null, ClassLoader::class);
    }
}
