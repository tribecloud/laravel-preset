<?php

namespace Tribecloud\LaravelPreset\Presets;

trait Common
{
    public static function updateCI()
    {
        copy(__DIR__.'/../stubs/.gitlab-ci.sh', base_path('.gitlab-ci.sh'));
        copy(__DIR__.'/../stubs/.gitlab-ci.yml', base_path('.gitlab-ci.yml'));
    }

    public static function updateCS()
    {
        copy(__DIR__.'/../stubs/.php_cs', base_path('.php_cs'));
    }
}