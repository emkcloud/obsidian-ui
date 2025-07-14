<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum TemplateSidebars: string
{
    use EnumTrait;

    case STANDARD = 'standard';

    case INVERTED = 'inverted';

    case LEFT = 'left';

    case RIGHT = 'right';

    public static function default(): self
    {
        return self::STANDARD;
    }
}
