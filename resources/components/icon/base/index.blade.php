{{-- setting --}}

@props(['name' => null])

@php $icon = sprintf('obsidian::icon.base.%s',$name); @endphp

{{-- output --}}

<x-dynamic-component :component="$icon" {{ $attributes }}/>