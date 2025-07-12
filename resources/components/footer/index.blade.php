{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:footer]')
        ->add('text-[var(--obsidian-base-text-color)]')
        ->add('bg-[var(--obsidian-base-background-color)]')
        ->add('border-t border-[var(--obsidian-base-border-color)]');
@endphp

{{-- output --}}

<footer {{ $attributes->class($classes) }} data-obsidian-ui-footer>
    {{ $slot }}
</footer>