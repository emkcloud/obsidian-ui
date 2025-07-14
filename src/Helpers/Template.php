<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\TemplateLayout;
use Emkcloud\ObsidianUI\Enums\TemplatePalette;
use Emkcloud\ObsidianUI\Enums\TemplateSidebars;
use Illuminate\Support\Str;

class Template
{
    public static function normalizeLayout(string $layout): string
    {
        $layout = Str::lower(Str::trim($layout));

        return (in_array($layout, TemplateLayout::values())) ? $layout : TemplateLayout::defaultValue();
    }

    public static function normalizePalette(string $palette): string
    {
        $palette = Str::lower(Str::trim($palette));

        return (in_array($palette, TemplatePalette::values())) ? $palette : TemplatePalette::defaultValue();
    }

    public static function normalizeSidebars(string $sidebars): string
    {
        $sidebars = Str::lower(Str::trim($sidebars));

        return (in_array($sidebars, TemplateSidebars::values())) ? $sidebars : TemplateSidebars::defaultValue();
    }
}
