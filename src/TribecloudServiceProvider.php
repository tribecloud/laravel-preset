<?php

namespace Tribecloud\LaravelPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class TribecloudServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        PresetCommand::macro('tribecloud-react', function ($command) {
            (new Preset)->install('react');

            $command->info('React scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('tribecloud-vue', function ($command) {
            (new Preset)->install('vue');

            $command->info('Vue scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
