{{-- setting --}}

@props([
    'layout'  => 'leonardo',
    'palette' => 'minimal',
])

{{-- classes --}}

@php
    $classes = ObsidianUI::classes('grid');
@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-template

    style="    grid-template:
        'header header header'
        'sidebar main aside' 1fr
        'footer footer footer' / min-content minmax(0, 1fr) min-content;
    "
    >

    {{ $slot }}
</div>