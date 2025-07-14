<?php

namespace Emkcloud\ObsidianUI\Traits;

trait EnumTrait
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function defaultName(): string
    {
        return self::default()->name;
    }

    public static function defaultValue(): string
    {
        return self::default()->value;
    }
}
