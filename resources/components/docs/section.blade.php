{{-- setting --}}

@props([
    'name'  => '', // section name
    'title' => '', // section title
    'label' => '', // section label
])

@empty($label) @php $label = Str::trim($title); @endphp @endempty
@empty($name ) @php $name  = Str::slug($label); @endphp @endempty
@empty($name ) @php $name  = Str::uuid()      ; @endphp @endempty

{{-- classes --}}

@php
    $classes = ObsidianUI::classes('mb-8');
@endphp

{{-- output --}}

<div id="{{ $name }}" {{ $attributes->class($classes) }}
    data-obsidian-ui-docs-section
    data-name="{{ $name }}"
    data-title="{{ $title }}"
    data-label="{{ $label }}"
>
    @if ($title)
        <x-obsidian::docs.title>{{ $title }}</x-obsidian::docs.title>
    @endif

    {{ $slot }}

</div>