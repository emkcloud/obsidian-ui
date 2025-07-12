{{-- setting --}}

@props(['sticky' => false])

{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:sidebar]')
        ->add('w-70 p-6 overflow-y-auto')
        ->add('text-[var(--obsidian-base-text-color)]')
        ->add('bg-[var(--obsidian-base-background-color)]')
        ->add('border-r border-[var(--obsidian-base-border-color)]');
@endphp

{{--
        AAsticky
        AAtop-18
        AAmax-h-[calc(100dvh_-_var(--spacing)_*_18)]
--}}

{{-- output --}}

<aside {{ $attributes->class($classes) }} data-obsidian-ui-sidebar>
    {{ $slot }}
</aside>