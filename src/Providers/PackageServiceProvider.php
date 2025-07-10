<?php

namespace Emkcloud\ObsidianUI\Providers;

use Emkcloud\ObsidianUI\Core\AssetManager;
use Emkcloud\ObsidianUI\Core\PackageManager;
use Emkcloud\ObsidianUI\Facades\ObsidianUI;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootViews();
        $this->bootComponents();
        $this->bootAssets();
    }

    private function bootAssets()
    {
        AssetManager::boot();
    }

    private function bootComponents()
    {
        if (file_exists(resource_path('views/obsidian')))
        {
            Blade::anonymousComponentPath(resource_path('views/obsidian'), 'obsidian');
        }

        Blade::anonymousComponentPath(__DIR__.'/../../resources/components', 'obsidian');
    }

    private function bootViews()
    {
        View::addNamespace('obsidian-ui', __DIR__.'/../../resources/views');
    }

    public function register(): void
    {
        $this->app->alias(PackageManager::class, 'obsidian-ui');

        $this->app->singleton(PackageManager::class);

        AliasLoader::getInstance()->alias('ObsidianUI', ObsidianUI::class);
    }
}
