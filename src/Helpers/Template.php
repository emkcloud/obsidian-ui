<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\TemplateLayout;
use Emkcloud\ObsidianUI\Enums\TemplatePalette;
use Emkcloud\ObsidianUI\Enums\TemplateSidebars;
use Illuminate\Support\Str;

class Template
{
    private $layout;

    private $palette;

    private $sidebars;

    public function getLayout(): string
    {
        return (in_array($this->layout, TemplateLayout::values())) ? $this->layout : TemplateLayout::defaultValue();
    }

    public function getPalette(): string
    {
        return (in_array($this->palette, TemplatePalette::values())) ? $this->palette : TemplatePalette::defaultValue();
    }

    public function getSidebars(): string
    {
        return (in_array($this->sidebars, TemplateSidebars::values())) ? $this->sidebars : TemplateSidebars::defaultValue();
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = Str::lower(Str::trim($layout));

        return $this;
    }

    public function setPalette(?string $palette): self
    {
        $this->palette = Str::lower(Str::trim($palette));

        return $this;
    }

    public function setSidebars(?string $sidebars): self
    {
        $this->sidebars = Str::lower(Str::trim($sidebars));

        return $this;
    }
}
