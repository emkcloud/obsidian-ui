<?php

namespace Emkcloud\ObsidianUI\Helpers;

use Emkcloud\ObsidianUI\Core\ClassBuilder;
use Emkcloud\ObsidianUI\Facades\ObsidianUI;
use Emkcloud\ObsidianUI\Enums\IconSize;

class Icon
{
    public function classes(string $size): ClassBuilder
    {
        return ObsidianUI::classes('shrink-0')->add(match ($size)
        {
            IconSize::MICRO->value => '[:where(&)]:size-4 [:where(&)]:stroke-[3.0]',
            IconSize::SMALL->value => '[:where(&)]:size-5 [:where(&)]:stroke-[2.4]',
            IconSize::STANDARD->value => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
            IconSize::LARGE->value => '[:where(&)]:size-8 [:where(&)]:stroke-[1.5]',
            IconSize::FULL->value => '[:where(&)]:size-full [:where(&)]:stroke-[1.0]',
            default => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
        })
        ->add('[:where(&)]:inline-block')
        ->add('[:where(&)]:text-[var(--obsidian-color-800)]')
        ->add('[:where(&)]:dark:text-[var(--obsidian-white)]/80');
    }
}
