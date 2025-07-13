{{-- setting --}}

@props([
    'main'  => false,
    'name'  => '',
    'title' => '',
    'label' => '',
])

{{-- setting --}}

@empty($label) @php $label = Str::trim($title); @endphp @endempty
@empty($name ) @php $name  = Str::slug($label); @endphp @endempty
@empty($name ) @php $name  = Str::uuid()      ; @endphp @endempty

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
        <x-obsidian::docs.title :main=$main>{{ $title }}</x-obsidian::docs.title>
    @endif

    {{ $slot }}

</div>