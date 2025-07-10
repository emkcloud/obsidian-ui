{{-- classes --}}

@php
    $classes = ObsidianUI::classes('flex flex-col')
        ->add('text-[var(--obsidian-default-color)]');
@endphp

{{-- output --}}

<nav data-obsidian-ui-navlist {{ $attributes->class($classes) }}>{{ $slot }}</nav>