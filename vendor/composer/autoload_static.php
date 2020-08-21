<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Metatavu\\LinkedEvents\\' => 22,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'CoenJacobs\\Mozart\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Metatavu\\LinkedEvents\\' => 
        array (
            0 => __DIR__ . '/..' . '/metatavu/linkedevents-php-client/lib',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'CoenJacobs\\Mozart\\' => 
        array (
            0 => __DIR__ . '/..' . '/coenjacobs/mozart/src',
        ),
    );

    public static $classMap = array (
        'Gamajo_Template_Loader' => __DIR__ . '/..' . '/gamajo/template-loader/class-gamajo-template-loader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509::$classMap;

        }, null, ClassLoader::class);
    }
}