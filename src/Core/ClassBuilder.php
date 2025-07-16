<?php

namespace Emkcloud\ObsidianUI\Core;

use Illuminate\Support\Arr;
use Stringable;

class ClassBuilder implements Stringable
{
    protected $classes = [];

    public function add($classes): self
    {
        $this->classes[] = Arr::toCssClasses($classes);

        return $this;
    }

    public function toArray(): array
    {
        return $this->classes;
    }

    public function __toString(): string
    {
        return (string) collect($this->classes)->join(' ');
    }
}
