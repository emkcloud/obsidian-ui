<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Illuminate\Support\Str;
use Phiki\Grammar\Grammar;
use Phiki\Theme\Theme;

class Code
{
    public static function normalizeLanguage(string $language): Grammar
    {
        $language = Str::lower(Str::trim($language));

        return Grammar::tryFrom($language) ?: Grammar::Txt;
    }

    public static function normalizeTheme(string $theme): Theme
    {
        $theme = Str::lower(Str::trim($theme));

        return Theme::tryFrom($theme) ?: Theme::GithubDark;
    }
}
