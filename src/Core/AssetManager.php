<?php

namespace Emkcloud\ObsidianUI\Core;

use Illuminate\Support\Facades\Blade;

class AssetManager
{
    static function boot()
    {
        $instance = new static;

        $instance->registerAssetDirective();
    }

    public function registerAssetDirective()
    {
        Blade::directive('obsidianUIScripts', function ($expression) {
            return <<<PHP
            {!! app('obsidian-ui')->scripts($expression) !!}
            PHP;
        });

        Blade::directive('obsidianUIAppearance', function ($expression) {
            return <<<PHP
            {!! app('obsidian-ui')->appearance($expression) !!}
            PHP;
        });
    }

    public static function appearance($options = [])
    {
        $nonce = isset($options) && isset($options['nonce']) ? ' nonce="' . $options['nonce'] . '"' : '';

        return view('obsidian-ui::assets.appearance')->with('nonce',$nonce)->render();
    }
}
