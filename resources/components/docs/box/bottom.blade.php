{{-- setting --}}

@props(['stacked' => ''])

{{-- output --}}

<x-obsidian::docs.box stacked="bottom" {{ $attributes }}>
    {{ $slot }}
</x-obsidian::docs.box>