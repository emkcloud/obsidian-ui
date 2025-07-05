{{-- Credit: Heroicons (https://heroicons.com) --}}

@props(['name' => null])

@php $icon = sprintf('obsidian::icon.hero.%s',$name); @endphp

{{-- output --}}

<x-dynamic-component :component="$icon" {{ $attributes }}>{{ $slot }}</x-dynamic-component>