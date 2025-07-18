<?php

namespace Emkcloud\ObsidianUI\Enums;

use Emkcloud\ObsidianUI\Traits\EnumTrait;
use Phiki\Theme\Theme;

enum CodeMode: string
{
    use EnumTrait;

    case BASE = 'light';
    case DARK = 'dark';

    public static function default(): self
    {
        return self::BASE;
    }

    public static function settings(): array
    {
        return
        [
            self::BASE->value => Theme::GithubLight,
            self::DARK->value => Theme::GithubDark,
        ];
    }
}
