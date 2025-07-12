{{-- classes --}}

@php
    $classes = ObsidianUI::classes('flex flex-col');
@endphp

{{-- output --}}

<nav data-obsidian-ui-navlist {{ $attributes->class($classes) }}>{{ $slot }}</nav>