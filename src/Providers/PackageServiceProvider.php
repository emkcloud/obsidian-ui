<?php

namespace Emkcloud\ObsidianUI\Providers;

use Emkcloud\ObsidianUI\Core\PackageManager;
use Emkcloud\ObsidianUI\Facades\ObsidianUI;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootComponents();
    }

    private function bootComponents()
    {
        if (file_exists(resource_path('views/obsidian')))
        {
            Blade::anonymousComponentPath(resource_path('views/obsidian'), 'obsidian');
        }

        Blade::anonymousComponentPath(__DIR__.'/../../stubs/resources/views/obsidian', 'obsidian');
    }

    public function register(): void
    {
        $this->app->alias(PackageManager::class, 'obsidian-ui');

        $this->app->singleton(PackageManager::class);

        AliasLoader::getInstance()->alias('ObsidianUI', ObsidianUI::class);
    }
}
