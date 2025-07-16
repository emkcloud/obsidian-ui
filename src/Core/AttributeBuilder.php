<?php

namespace Emkcloud\ObsidianUI\Core;

use Stringable;

class AttributeBuilder implements Stringable
{
    protected $attributes = [];

    public function add(string $name, string $value): self
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function toArray(): array
    {
        return $this->attributes;
    }

    public function __toString(): string
    {
        return collect($this->attributes)->map(function ($value, $key)
        {
            if (is_bool($value))
            {
                return $value ? $key : null;
            }

            return sprintf('%s="%s"', $key, htmlspecialchars($value));

        })->filter()->implode(' ');
    }
}
