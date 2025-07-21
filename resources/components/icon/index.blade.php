{{-- setting --}}

@props(
[
    'set'  => 'hero',
    'name' => 'check-circle',
])

{{-- setting --}}

@php $component = ObsidianUI::icon()
        ->setIcon($set)
        ->setName($name)
        ->component();
@endphp

{{-- output --}}

<x-dynamic-component :component="$component" {{ $attributes }}/>