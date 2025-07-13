{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:aside]')
        ->add('[:where(&)]:py-8')
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:w-70')
        ->add('[:where(&)]:overflow-y-auto')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]')
        ->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]')
        ->add('[:where(&)]:border-l')
        ->add('[:where(&)]:border-[var(--obsidian-base-border-color)]')
        ->add('group-[&[data-obsidian-ui-sidebars=left]]/template:[:where(&)]:border-0')
        ->add('group-[&[data-obsidian-ui-sidebars=left]]/template:[:where(&)]:border-r')
        ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-0')
        ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-r');
@endphp

{{-- output --}}

<aside {{ $attributes->class($classes) }} data-obsidian-ui-aside>
    {{ $slot }}
</aside>