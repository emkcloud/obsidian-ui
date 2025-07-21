{{-- setting --}}

@props(['stacked' => ''])

{{-- output --}}

<x-obsidian::docs.box stacked="middle" {{ $attributes }}>{{ $slot }}</x-obsidian::docs.box>