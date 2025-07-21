{{-- setting --}}

@props(['stacked' => ''])

{{-- output --}}

<x-obsidian::docs.box stacked="top" {{ $attributes }}>{{ $slot }}</x-obsidian::docs.box>