<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;

enum TemplateLayout: string
{
    use EnumTrait;

    case LEONARDO = 'leonardo';

    case MICHELANGELO = 'michelangelo';

    case RAFFAELLO = 'raffaello';

    public static function default(): self
    {
        return self::LEONARDO;
    }
}
