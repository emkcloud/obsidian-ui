<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;
use Phiki\Theme\Theme;

enum CodeMode: string
{
    use EnumTrait;

    case L = 'light';

    case D = 'dark';

    public static function default(): self
    {
        return self::L;
    }

    public static function settings(): array
    {
        return
        [
            self::L->value => Theme::GithubLight,
            self::D->value => Theme::GithubDark,
        ];
    }
}
