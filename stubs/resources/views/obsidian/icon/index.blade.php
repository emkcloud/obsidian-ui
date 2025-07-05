{{-- setting --}}

@props(['name' => null,'set' => null])

@php $icon = sprintf('obsidian::icon.%s.%s',$set,$name); @endphp

{{-- output --}}

<x-dynamic-component :component="$icon" {{ $attributes }}>{{ $slot }}</x-dynamic-component>