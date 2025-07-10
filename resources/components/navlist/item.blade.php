{{-- classes --}}

@php
    $classes = ObsidianUI::classes('inline-block py-1')
        ->add('group-[.is-group]:pl-4')
        ->add('group-[.is-group]:border-l-2')
        ->add('border-[var(--obsidian-color-base-100)]')
        ->add('dark:border-[var(--obsidian-color-base-700)]')
        ->add('hover:text-[var(--obsidian-color-base-950)]')
        ->add('hover:border-[var(--obsidian-color-base-300)]')
        ->add('dark:hover:text-[var(--obsidian-color-base)]')
        ->add('dark:hover:border-[var(--obsidian-color-base-500)]');

    $current = ObsidianUI::classes()
        ->add('text-[var(--obsidian-color-base-950)]!')
        ->add('border-[var(--obsidian-color-base-950)]!')
        ->add('dark:text-[var(--obsidian-color-base)]!')
        ->add('dark:border-[var(--obsidian-color-base)]!')
@endphp

{{-- output --}}

<a data-obsidian-ui-navlist-item {{ $attributes->class($classes) }} wire:current="{{ $current }}">{{ $slot }}</a>