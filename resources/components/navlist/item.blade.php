{{-- classes --}}

@php
    $classes = ObsidianUI::classes('inline-block py-1')
        ->add('group-[.is-group]:pl-4')
        ->add('group-[.is-group]:border-l-2')
        ->add('border-[var(--obsidian-base-border-color)]')
        ->add('hover:text-[var(--obsidian-base-text-color-highlight)]')
        ->add('hover:border-[var(--obsidian-base-text-color-highlight)]');

    $current = ObsidianUI::classes()
        ->add('text-[var(--obsidian-base-text-color-highlight)]!')
        ->add('border-[var(--obsidian-base-text-color-highlight)]!');
@endphp

{{-- output --}}

<a data-obsidian-ui-navlist-item {{ $attributes->class($classes) }} wire:navigate wire:current="{{ $current }}">{{ $slot }}</a>