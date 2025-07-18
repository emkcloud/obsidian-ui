{{-- setting --}}

@props(
[
    'main'  => false,
    'title' => '',
    'label' => '',
])

{{-- setting --}}

@empty($label) @php $label = Str::trim($title); @endphp @endempty
@empty($name ) @php $name  = Str::slug($label); @endphp @endempty

{{-- setting --}}

@php ObsidianUI::section()->add(); @endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes('[:where(&)]:mb-8'); @endphp

{{-- output --}}

<div id="{{ $name }}" {{ $attributes->class($classes) }}

    data-obsidian-ui-docs-section
    data-main="{{ $main }}"
    data-name="{{ $name }}"
    data-title="{{ $title }}"
    data-label="{{ $label }}"
>
    @if ($title)
        <x-obsidian::docs.title 
            :main=$main
            :title=$title
            :label=$label
        >{{ $title }}</x-obsidian::docs.title>
    @endif

    {{ $slot }}

</div>