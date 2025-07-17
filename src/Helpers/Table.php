<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Illuminate\Support\Str;

class Table
{
    private $body = [];

    private $content;

    private $head = [];

    private $structure = [];

    public function __construct($content)
    {
        $this->setContent($content);
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function getTableHead(): array
    {
        return $this->head;
    }

    public function getTableBody(): array
    {
        return $this->body;
    }

    public function setContent(?string $content): self
    {
        $this->content = Str::trim($content);

        $this->setStructure();
        $this->setStructureHead();
        $this->setStructureBody();

        $this->normalizeTextHead();
        $this->normalizeTextBody();

        return $this;
    }

    private function setStructure(): void
    {
        $this->structure = [];

        foreach (explode(PHP_EOL, $this->content) as $key => $line)
        {
            foreach (str_getcsv($line, '|') as $value)
            {
                $this->structure[$key][] = Str::squish($value);
            }
        }
    }

    private function setStructureHead(): void
    {
        $this->head = $this->structure[0] ?? [];
    }

    private function setStructureBody(): void
    {
        $this->body = [];

        foreach (array_slice($this->structure, 1) as $value)
        {
            if (isset($value[0]) && $value[0] !== str_repeat('-', strlen($value[0])))
            {
                $this->body[] = $value;
            }
        }
    }

    private function normalizeText(string $value): string
    {
        $value = $this->normalizeTextHtml($value);
        $value = $this->normalizeTextCode($value);
        $value = $this->normalizeTextPrimary($value);

        return $value;
    }

    private function normalizeTextHead(): void
    {
        foreach ($this->head as $key => $value)
        {
            $this->head[$key] = $this->normalizeText($value);
        }
    }

    private function normalizeTextBody(): void
    {
        foreach ($this->body as $row => $columns)
        {
            foreach ($columns as $key => $value)
            {
                $this->body[$row][$key] = $this->normalizeText($value);
            }
        }
    }

    private function normalizeTextCode(string $value): string
    {
        return preg_replace_callback('/(?<!\S)`([^\s`][^`\n]*[^\s`])`(?!\S)/', function ($matches)
        {
            return implode(' ', array_map(function ($item)
            {
                return sprintf('<code>%s</code>', Str::trim($item));

            }, explode(',', $matches[1])));

        }, $value);
    }

    private function normalizeTextHtml(string $value): string
    {
        return htmlspecialchars($value);
    }

    private function normalizeTextPrimary(string $value): string
    {
        return preg_replace_callback('/(?<!\S)\*([^\s*][^*\n]*[^\s*])\*(?!\S)/', function ($matches)
        {
            return sprintf('<span class="primary">%s</span>', Str::trim($matches[1]));

        }, $value);
    }
}
