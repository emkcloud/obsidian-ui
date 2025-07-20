<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum DocsBoxPadding: string
{
    use EnumTrait;

    case NONE = 'none';
    case STANDARD = 'standard';
    case RELAXED = 'relaxed';
    case EXTENDED = 'extended';

    public static function default(): self
    {
        return self::STANDARD;
    }
}
