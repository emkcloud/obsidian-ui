<?php

namespace Emkcloud\ObsidianUI\Core;

class PackageManager
{
    public function appearance($options = [])
    {
        return AssetManager::appearance($options);
    }

    public function classes($styles = null)
    {
        $builder = new ClassBuilder;

        return $styles ? $builder->add($styles) : $builder;
    }

    public function classesIcon($size)
    {
        return $this->classes('shrink-0')->add(match ($size)
        {
            'large' => '[:where(&)]:size-8 [:where(&)]:stroke-[1.5]',
            'standard' => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
            'small' => '[:where(&)]:size-5 [:where(&)]:stroke-[2.4]',
            'micro' => '[:where(&)]:size-4 [:where(&)]:stroke-[3.0]',
            'full' => '[:where(&)]:size-full [:where(&)]:stroke-[1.0]',
            default => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
        })
            ->add('[:where(&)]:text-[var(--obsidian-color-800)]')
            ->add('[:where(&)]:dark:text-[var(--obsidian-white)]/80');
    }

    public function scripts($options = [])
    {
        return AssetManager::scripts($options);
    }
}
