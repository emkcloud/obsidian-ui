{{-- setting --}}

@props([
    'layout'   => config('obsidian-ui.template.layout'),
    'palette'  => config('obsidian-ui.template.palette'),
    'sidebars' => config('obsidian-ui.template.sidebars'),
])

{{-- normalize --}}

@php 
    $layout   = ObsidianUI::template()::normalizeLayout($layout);
    $palette  = ObsidianUI::template()::normalizePalette($palette);
    $sidebars = ObsidianUI::template()::normalizeSidebars($sidebars);
@endphp

{{-- classes --}}

@php
    $classes = ObsidianUI::classes('grid group/template');
@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} 
    data-obsidian-ui-template
    data-obsidian-ui-layout="{{ $layout }}"
    data-obsidian-ui-palette="{{ $palette }}"
    data-obsidian-ui-sidebars="{{ $sidebars }}"
>
    {{ $slot }}
</div>