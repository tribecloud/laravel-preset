<?php

namespace Tribecloud\LaravelPreset\Presets;

use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Arr;

class React extends LaravelPreset
{
    use Common;

    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateStyles();
        static::updateScripts();
        static::updateCI();
        static::updateCS();
        static::removeNodeModules();
    }

    protected static function updatePackageArray(array $packages)
    {
        return [
            '@babel/preset-react' => '^7.0.0',
            'react' => '^16.2.0',
            'react-dom' => '^16.2.0',
        ] + Arr::except($packages, ['vue', 'jquery', 'bootstrap', 'popper.js']);
    }

    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/../stubs/react/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function updateStyles()
    {
        File::cleanDirectory(resource_path('sass'));

        copy(__DIR__.'/../stubs/app.sass', resource_path('sass/app.scss'));
    }

    public static function updateScripts()
    {
        File::cleanDirectory(resource_path('js'));

        copy(__DIR__.'/../stubs/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/../stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }
}
