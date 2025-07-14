<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum DocsBoxStacked: string
{
    use EnumTrait;

    case STANDALONE = 'standalone';

    case TOP = 'top';

    case MIDDLE = 'middle';

    case BOTTOM = 'bottom';

    public static function default(): self
    {
        return self::STANDALONE;
    }
}
