<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum DocsBoxHeight: string
{
    use EnumTrait;

    case STANDARD = 'standard';
    case SMALL = 'small';
    case MEDIUM = 'medium';
    case LARGE = 'large';

    public static function default(): self
    {
        return self::STANDARD;
    }
}
