<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum TemplatePalette: string
{
    use EnumTrait;

    case MINIMAL = 'minimal';
    case GRACEFUL = 'graceful';
    case VIBRANT = 'vibrant';
    case TRANSPARENT = 'transparent';

    public static function default(): self
    {
        return self::MINIMAL;
    }
}
