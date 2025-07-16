<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\CodeMode;
use Illuminate\Support\Str;
use Phiki\Grammar\Grammar;
use Phiki\Phiki;
use Phiki\Theme\Theme;

class Code
{
    private $filename;

    private $language;

    private $stream;

    private $themes;

    private $viewname;

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function getLanguage(): Grammar
    {
        return Grammar::tryFrom($this->language) ?: Grammar::Php;
    }

    public function getOutput(): ?string
    {
        if ($this->getFilename() && file_exists($this->getFilename()))
        {
            return file_get_contents($this->getFilename());
        }

        return $this->getStream();
    }

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function getThemes(): array
    {
        $themes = explode(',', $this->themes);

        if (count($themes) == 1)
        {
            return
            [
                CodeMode::L->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[0],
                CodeMode::D->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[1],
            ];
        }

        if (count($themes) >= 2)
        {
            return
            [
                CodeMode::L->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[0],
                CodeMode::D->value => Theme::tryFrom($themes[1]) ?: CodeMode::settings()[1],
            ];
        }

        return CodeMode::settings();
    }

    public function getViewname(): ?string
    {
        return $this->viewname;
    }

    public function output(): ?string
    {
        return (new Phiki)->codeToHtml(
            $this->getOutput(),
            $this->getLanguage(),
            $this->getThemes(),
        );
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = Str::trim($filename);

        return $this;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = Str::lower(Str::trim($language));

        return $this;
    }

    public function setStream(?string $stream): self
    {
        $this->stream = $stream;

        return $this;
    }

    public function setThemes(string $themes): self
    {
        $this->themes = Str::lower(Str::trim($themes));

        return $this;
    }

    public function setViewname(?string $viewname): self
    {
        $this->viewname = Str::trim($viewname);

        return $this;
    }
}
