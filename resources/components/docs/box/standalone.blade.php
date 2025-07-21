{{-- setting --}}

@props(['stacked' => ''])

{{-- output --}}

<x-obsidian::docs.box stacked="standalone" {{ $attributes }}>{{ $slot }}</x-obsidian::docs.box>