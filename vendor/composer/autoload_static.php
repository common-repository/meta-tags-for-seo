<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dbb4c612419fdb047f735d97a848776
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Pagup\\MetaTags\\Controllers\\MetaboxController' => __DIR__ . '/../..' . '/admin/controllers/MetaboxController.php',
        'Pagup\\MetaTags\\Controllers\\NotificationController' => __DIR__ . '/../..' . '/admin/controllers/NotificationController.php',
        'Pagup\\MetaTags\\Controllers\\SettingsController' => __DIR__ . '/../..' . '/admin/controllers/SettingsController.php',
        'Pagup\\MetaTags\\Controllers\\TrackingController' => __DIR__ . '/../..' . '/admin/controllers/TagsController.php',
        'Pagup\\MetaTags\\Core\\Asset' => __DIR__ . '/../..' . '/core/Asset.php',
        'Pagup\\MetaTags\\Core\\Option' => __DIR__ . '/../..' . '/core/Option.php',
        'Pagup\\MetaTags\\Core\\Plugin' => __DIR__ . '/../..' . '/core/Plugin.php',
        'Pagup\\MetaTags\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Pagup\\MetaTags\\Settings' => __DIR__ . '/../..' . '/admin/Settings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3dbb4c612419fdb047f735d97a848776::$classMap;

        }, null, ClassLoader::class);
    }
}