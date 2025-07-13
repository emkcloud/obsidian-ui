@use('Emkcloud\ObsidianUI\Enums\Layout')
@use('Emkcloud\ObsidianUI\Enums\Palette')
@use('Emkcloud\ObsidianUI\Enums\Sidebars')

{{-- setting --}}

@props([
    'layout'   => Layout::LEONARDO,
    'palette'  => Palette::MINIMAL,
    'sidebars' => Sidebars::STANDARD,
])

{{-- normalize --}}

@php 
    $layout   = ObsidianUI::normalizeLayout($layout);
    $palette  = ObsidianUI::normalizePalette($palette);
    $sidebars = ObsidianUI::normalizeSidebars($sidebars);
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