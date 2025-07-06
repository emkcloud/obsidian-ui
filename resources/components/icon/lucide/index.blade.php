{{-- Credit: Lucide (https://lucide.dev) --}}

@props(['name' => null])

@php $icon = sprintf('obsidian::icon.lucide.%s',$name); @endphp
{{-- output --}}

<x-dynamic-component :component="$icon" {{ $attributes }}>{{ $slot }}</x-dynamic-component>