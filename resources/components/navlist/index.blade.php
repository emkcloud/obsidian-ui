{{-- classes --}}

@php
    $classes = ObsidianUI::classes('flex flex-col')
        ->add('text-[var(--obsidian-color-base-500)]')
        ->add('dark:text-[var(--obsidian-color-base-300)]');
@endphp

{{-- output --}}

<nav data-obsidian-ui-navlist {{ $attributes->class($classes) }}>{{ $slot }}</nav>