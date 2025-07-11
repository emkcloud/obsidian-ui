<?php

namespace Emkcloud\ObsidianUI\Core;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

class AssetManager
{
    public static function boot()
    {
        $instance = new static;

        $instance->registerAssetRoutes();
        $instance->registerAssetDirective();
    }

    public function registerAssetRoutes()
    {
        Route::get('/obsidian-ui/obsidian-ui.js', [static::class, 'obsidianUIJs']);
        Route::get('/obsidian-ui/obsidian-ui.css', [static::class, 'obsidianUICss']);
    }

    public function registerAssetDirective()
    {
        Blade::directive('obsidianUIScripts', function ($expression)
        {
            return <<<PHP
            {!! app('obsidian-ui')->scripts($expression) !!}
            PHP;
        });

        Blade::directive('obsidianUIAppearance', function ($expression)
        {
            return <<<PHP
            {!! app('obsidian-ui')->appearance($expression) !!}
            PHP;
        });
    }

    public static function assetsNonce($options)
    {
        return isset($options) && isset($options['nonce']) ? ' nonce="'.$options['nonce'].'"' : '';
    }

    public static function appearance($options = [])
    {
        $nonce = self::assetsNonce($options);

        return view('obsidian-ui::assets.appearance')->with('nonce', $nonce)->render();
    }

    public static function scripts($options = [])
    {
        $nonce = self::assetsNonce($options);

        $hash = filemtime(__DIR__.'/../../dist/obsidian-ui.js');

        return '<script src="/obsidian-ui/obsidian-ui.js?id='.$hash.'" data-navigate-once'.$nonce.'></script>';
    }

    public function obsidianUIJs()
    {
        $file = __DIR__.'/../../dist/obsidian-ui.js';

        $headers = $this->responseHeaders($file, 'text/javascript');

        return response()->file($file, $headers);
    }

    public function obsidianUICss()
    {
        $file = __DIR__.'/../../dist/obsidian-ui.css';

        $headers = $this->responseHeaders($file, 'text/css');

        return response()->file($file, $headers);
    }

    protected function responseCache(): string
    {
        return 'public, max-age=31536000';
    }

    protected function responseDate(string $timestamp): string
    {
        return sprintf('%s GMT', gmdate('D, d M Y H:i:s', $timestamp));
    }

    protected function responseExpires(): string
    {
        return $this->responseDate(strtotime('+1 year'));
    }

    protected function responseHeaders(string $file, string $contentType): array
    {
        return
        [
            'Content-Type' => $contentType,
            'Expires' => $this->responseExpires(),
            'Cache-Control' => $this->responseCache(),
            'Last-Modified' => $this->responseLastModified($file),
        ];
    }

    protected function responseLastModified(string $file): string
    {
        return $this->responseDate(filemtime($file));
    }
}
