<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\CodeLanguage;
use Emkcloud\ObsidianUI\Enums\CodeMode;
use Emkcloud\ObsidianUI\Enums\CodeTheme;
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
        return Grammar::tryFrom($this->getLanguageShort()) ?: Grammar::Php;
    }

    public function getLanguageShort(): string
    {
        $constant = sprintf('%s::L%04d', CodeLanguage::class, $this->language);

        if (defined($constant))
        {
            return constant($constant)->value;
        }

        return $this->language;
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
        foreach ($themes = explode(',', $this->themes) as $key => $theme)
        {
            $themes[$key] = $this->getThemesShort($theme);
        }

        if (count($themes) == 1)
        {
            return
            [
                CodeMode::BASE->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[0],
                CodeMode::DARK->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[1],
            ];
        }

        if (count($themes) >= 2)
        {
            return
            [
                CodeMode::BASE->value => Theme::tryFrom($themes[0]) ?: CodeMode::settings()[0],
                CodeMode::DARK->value => Theme::tryFrom($themes[1]) ?: CodeMode::settings()[1],
            ];
        }

        return CodeMode::settings();
    }

    public function getThemesShort($value): string
    {
        $constant = sprintf('%s::T%04d', CodeTheme::class, $value);

        if (defined($constant))
        {
            return constant($constant)->value;
        }

        return $value;
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
