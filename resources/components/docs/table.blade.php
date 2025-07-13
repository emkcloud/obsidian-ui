{{-- classes --}}

@php $classes = ObsidianUI::classes('[:where(&)]:my-6'); @endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-table>
    {{ $slot }}
</div>