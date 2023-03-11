<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcafe76d81b9701a16299c21275d1dc1f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcafe76d81b9701a16299c21275d1dc1f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcafe76d81b9701a16299c21275d1dc1f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcafe76d81b9701a16299c21275d1dc1f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
