<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\Layout;
use Emkcloud\ObsidianUI\Enums\Palette;
use Emkcloud\ObsidianUI\Enums\Sidebars;
use Illuminate\Support\Str;

class Template
{
    public static function getLayouts(): array
    {
        return
        [
            Layout::LEONARDO,
            Layout::MICHELANGELO,
            Layout::RAFFAELLO,
        ];
    }

    public static function getPalettes(): array
    {
        return
        [
            Palette::MINIMAL,
        ];
    }

    public static function getSidebars(): array
    {
        return
        [
            Sidebars::STANDARD,
            Sidebars::INVERTED,
            Sidebars::LEFT,
            Sidebars::RIGHT,
        ];
    }

    public static function normalizeLayout(string $layout): string
    {
        $layout = Str::lower(Str::trim($layout));

        return (in_array($layout, self::getLayouts())) ? $layout : Layout::LEONARDO;
    }

    public static function normalizePalette(string $palette): string
    {
        $palette = Str::lower(Str::trim($palette));

        return (in_array($palette, self::getPalettes())) ? $palette : Palette::MINIMAL;
    }

    public static function normalizeSidebars(string $sidebars): string
    {
        $sidebars = Str::lower(Str::trim($sidebars));

        return (in_array($sidebars, self::getSidebars())) ? $sidebars : Sidebars::STANDARD;
    }
}
