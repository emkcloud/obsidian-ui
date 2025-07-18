{{-- setting --}}

@props(
[
    'set'  => 'hero',
    'name' => 'check-circle',
])

{{-- setting --}}

@php $icon = sprintf('obsidian::icon.%s.%s',$set,$name); @endphp

{{-- output --}}

<x-dynamic-component :component="$icon" {{ $attributes }}/>