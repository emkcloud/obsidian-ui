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
    data-obsidian-ui-docs-section-main="{{ $main }}"
    data-obsidian-ui-docs-section-name="{{ $name }}"
    data-obsidian-ui-docs-section-title="{{ $title }}"
    data-obsidian-ui-docs-section-label="{{ $label }}"
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