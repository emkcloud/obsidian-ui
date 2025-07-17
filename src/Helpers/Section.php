<?php

namespace Emkcloud\ObsidianUI\Helpers;

class Section
{
    protected static array $sections = [];

    public function add(array $section): self
    {
        self::$sections[] = $section;

        return $this;
    }

    public static function all(): array
    {
        return self::$sections;
    }

    public static function start(): self
    {
        return new self();
    }
}
