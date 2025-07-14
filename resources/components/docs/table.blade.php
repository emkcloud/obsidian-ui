{{-- classes --}}

@php $classes = ObsidianUI::classes(); @endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-table>
    {{ $slot }}
</div>