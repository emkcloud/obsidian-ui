{{-- setting --}}

@props(
[
    'layout'   => config('obsidian-ui.template.layout'),
    'palette'  => config('obsidian-ui.template.palette'),
    'sidebars' => config('obsidian-ui.template.sidebars'),
])

{{-- setting --}}

@php $template = ObsidianUI::template()
        ->setLayout($layout)
        ->setPalette($palette)
        ->setSidebars($sidebars);
@endphp

{{-- setting --}}

@php

    $layout   = $template->getLayout();
    $palette  = $template->getPalette();
    $sidebars = $template->getSidebars();

@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes('group/template'); @endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} 

    data-obsidian-ui-template
    data-obsidian-ui-layout="{{ $layout }}"
    data-obsidian-ui-palette="{{ $palette }}"
    data-obsidian-ui-sidebars="{{ $sidebars }}"

>{{ $slot }}</div>