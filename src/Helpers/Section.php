<?php

namespace Emkcloud\ObsidianUI\Helpers;

class Section
{
    protected static $current;

    protected static array $sections = [];

    public function add(): self
    {
        self::$sections[] = [];

        self::$current = array_key_last(self::$sections);

        return $this;
    }

    public static function all(): array
    {
        return self::$sections;
    }

    public static function start(): self
    {
        return new self;
    }

    public function title($title): self
    {
        self::$sections[self::$current]['title'] = $title;

        return $this;
    }

    public function subtitle($subtitle): self
    {
        self::$sections[self::$current]['subtitles'][] = $subtitle;

        return $this;
    }
}
