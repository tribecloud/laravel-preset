<?php

namespace Tribecloud\LaravelPreset;

use InvalidArgumentException;

class Preset
{
    public function install($presetName)
    {
        if (! in_array($presetName, ['vue', 'react'])) {
            throw new InvalidArgumentException('Invalid preset.');
        }

        return $this->{$presetName}();
    }

    public function vue()
    {
        Presets\Vue::install();
    }

    public function react()
    {
        Presets\React::install();
    }
}
