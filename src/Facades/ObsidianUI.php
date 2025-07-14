<?php

namespace Emkcloud\ObsidianUI\Facades;

use Illuminate\Support\Facades\Facade;

class ObsidianUI extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'obsidian-ui';
    }
}
