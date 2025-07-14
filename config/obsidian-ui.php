<?php

use Emkcloud\ObsidianUI\Enums\TemplateLayout;
use Emkcloud\ObsidianUI\Enums\TemplatePalette;
use Emkcloud\ObsidianUI\Enums\TemplateSidebars;

return
[
    /*
    |--------------------------------------------------------------------------
    | Obsidian UI - Template
    |--------------------------------------------------------------------------
    */

    'template'     =>
    [
        'layout'   => env('OBSIDIAN_UI_LAYOUT',TemplateLayout::LEONARDO->value),
        'palette'  => env('OBSIDIAN_UI_PALETTE',TemplatePalette::MINIMAL->value),
        'sidebars' => env('OBSIDIAN_UI_SIDEBARS',TemplateSidebars::STANDARD->value),
    ]
];