{{-- setting --}}

@props(['sticky' => false])

{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:header]')
        ->add('h-18 flex items-center')
        ->add('text-[var(--obsidian-base-text-color)]')
        ->add('bg-[var(--obsidian-base-background-color)]')
        ->add('border-b border-[var(--obsidian-base-border-color)]');
@endphp

{{-- classes --}}

@if ($sticky)
    @php $classes->add('sticky top-0') @endphp
@endif

{{-- output --}}

<header {{ $attributes->class($classes) }} data-obsidian-ui-header>
    {{ $slot }}
</header>