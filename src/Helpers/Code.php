<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Enums\CodeLanguage;
use Emkcloud\ObsidianUI\Enums\CodeMode;
use Emkcloud\ObsidianUI\Enums\CodeTheme;
use Emkcloud\ObsidianUI\Facades\ObsidianUI;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Phiki\Grammar\Grammar;
use Phiki\Phiki;
use Phiki\Theme\Theme;

class Code
{
    private $content;

    private $file;

    private $gutter;

    private $language;

    private $storage;

    private $slot;

    private $themes;

    private $view;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function getGutter(): bool
    {
        return $this->gutter;
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

    public function getOutput(): string
    {
        return $this->getOutputCode() ?: '';
    }

    public function getOutputCode(): ?string
    {
        if ($this->getContent())
        {
            return $this->getContent();
        }

        if ($this->getStorage() && $this->getFile())
        {
            if (Config::has('filesystems.disks.'.$this->getStorage()))
            {
                return Storage::disk($this->getStorage())->get($this->getFile());
            }
        }

        if (is_null($this->getStorage()) && $this->getFile() && file_exists($this->getFile()))
        {
            return file_get_contents($this->getFile());
        }

        if ($this->getView() && View::exists($this->getView()))
        {
            return view($this->getView())->render();
        }

        return $this->getSlot();
    }

    public function getStorage(): ?string
    {
        return $this->storage;
    }

    public function getSlot(): ?string
    {
        return $this->slot;
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

    public function getView(): ?string
    {
        return $this->view;
    }

    public function output(): ?string
    {
        return (new Phiki)->codeToHtml(
            $this->getOutput(),
            $this->getLanguage(),
            $this->getThemes(),
            $this->getGutter()
        );
    }

    public function setContent(?string $content): self
    {
        $this->content = Str::trim($content);

        return $this;
    }

    public function setFile(?string $file): self
    {
        $this->file = Str::trim($file);

        return $this;
    }

    public function setGutter(?string $gutter): self
    {
        $this->gutter = ObsidianUI::isTrue($gutter);

        return $this;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = Str::lower(Str::trim($language));

        return $this;
    }

    public function setStorage(?string $storage): self
    {
        $this->storage = Str::trim($storage);

        return $this;
    }

    public function setSlot(?string $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function setThemes(string $themes): self
    {
        $this->themes = Str::lower(Str::trim($themes));

        return $this;
    }

    public function setView(?string $view): self
    {
        $this->view = Str::trim($view);

        return $this;
    }
}
