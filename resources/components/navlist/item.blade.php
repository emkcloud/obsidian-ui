{{-- classes --}}

@php
    $classes = ObsidianUI::classes('inline-block py-1')
        ->add('group-[.is-group]:pl-4')
        ->add('group-[.is-group]:border-l-2')
        ->add('border-[var(--obsidian-default-border-color)]')
        ->add('hover:text-[var(--obsidian-default-color-selected)]')
        ->add('hover:border-[var(--obsidian-default-border-color-selected)]');

    $current = ObsidianUI::classes()
        ->add('text-[var(--obsidian-default-color-selected)]!')
        ->add('border-[var(--obsidian-default-color-selected)]!');
@endphp

{{-- output --}}

<a data-obsidian-ui-navlist-item {{ $attributes->class($classes) }} wire:navigate wire:current="{{ $current }}">{{ $slot }}</a>