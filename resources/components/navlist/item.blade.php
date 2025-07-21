{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:py-1')
        ->add('[:where(&)]:inline-block')
        ->add('[:where(&)]:group-[.is-group]:pl-4')
        ->add('[:where(&)]:group-[.is-group]:border-l-2')
        ->add('[:where(&)]:border-[var(--obsidian-border-color)]')
        ->add('[:where(&)]:hover:text-[var(--obsidian-text-color-highlight)]')
        ->add('[:where(&)]:hover:border-[var(--obsidian-text-color-highlight)]');
@endphp

{{-- current --}}

@php $current = ObsidianUI::classes()
        ->add('[:where(&)]:text-[var(--obsidian-color-primary)]!')
        ->add('[:where(&)]:border-[var(--obsidian-color-primary)]!');
@endphp

{{-- output --}}

<a {{ $attributes->class($classes) }}

    wire:navigate
    wire:current="{{ $current }}"
    data-obsidian-ui-navlist-item

>{{ $slot }}</a>