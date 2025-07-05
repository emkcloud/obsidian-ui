<?php

namespace Emkcloud\ObsidianUI\Core;

class PackageManager
{
    public function classes($styles = null)
    {
        $builder = new ClassBuilder;

        return $styles ? $builder->add($styles) : $builder;
    }
}
