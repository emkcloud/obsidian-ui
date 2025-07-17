<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum IconSize: string
{
    use EnumTrait;

    case FULL = 'full';

    case MICRO = 'micro';

    case SMALL = 'small';

    case STANDARD = 'standard';

    case LARGE = 'large';

    public static function default(): self
    {
        return self::STANDARD;
    }
}
