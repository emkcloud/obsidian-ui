<?php

namespace Emkcloud\ObsidianUI\Core;

use Emkcloud\ObsidianUI\Helpers\Code;
use Emkcloud\ObsidianUI\Helpers\Icon;
use Emkcloud\ObsidianUI\Helpers\Section;
use Emkcloud\ObsidianUI\Helpers\Table;
use Emkcloud\ObsidianUI\Helpers\Template;

class PackageManager
{
    public function appearance($options = []): string
    {
        return AssetManager::appearance($options);
    }

    public function attributes(?string $name = null, ?string $value = null): AttributeBuilder
    {
        $builder = new AttributeBuilder;

        return $name ? $builder->add($name, $value) : $builder;
    }

    public function classes($classes = null): ClassBuilder
    {
        $builder = new ClassBuilder;

        return $classes ? $builder->add($classes) : $builder;
    }

    public function code(): Code
    {
        return new Code;
    }

    public function icon(): Icon
    {
        return new Icon;
    }

    public function isTrue(mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function section(): Section
    {
        return Section::start();
    }

    public function scripts($options = []): string
    {
        return AssetManager::scripts($options);
    }

    public function table(string $content): Table
    {
        return new Table($content);
    }

    public function template(): Template
    {
        return new Template;
    }
}
