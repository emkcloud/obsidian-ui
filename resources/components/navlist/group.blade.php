{{-- setting --}}

@props(['title' => ''])

{{-- classes --}}

@php

    $classes = ObsidianUI::classes('flex flex-col mt-4 first:mt-0');

    $headcss = ObsidianUI::classes('mb-3 font-semibold');

    $slotcss = ObsidianUI::classes('group is-group flex flex-col');

@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-navlist-group>
    <div class="{{ $headcss }}">{{ $title }}</div>
    <div class="{{ $slotcss }}">{{ $slot  }}</div>
</div>