{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:footer]')
        ->add('[:where(&)]:border-t')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]')
        ->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]')
        ->add('[:where(&)]:border-[var(--obsidian-base-border-color)]');
@endphp

{{-- output --}}

<footer {{ $attributes->class($classes) }} data-obsidian-ui-footer>
    {{ $slot }}
</footer>