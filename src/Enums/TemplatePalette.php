<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum TemplatePalette: string
{
    use EnumTrait;

    case MINIMAL = 'minimal';

    public static function default(): self
    {
        return self::MINIMAL;
    }
}
