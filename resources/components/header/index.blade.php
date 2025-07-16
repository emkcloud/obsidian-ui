{{-- setting --}}

@props(['sticky' => false])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:header]')
        ->add('[:where(&)]:h-18')
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:flex')
        ->add('[:where(&)]:items-center')
        ->add('[:where(&)]:border-b')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]')
        ->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]')
        ->add('[:where(&)]:border-[var(--obsidian-base-border-color)]');
@endphp

{{-- classes --}}

@if ($sticky)
    @php $classes->add('sticky top-0') @endphp
@endif

{{-- output --}}

<header {{ $attributes->class($classes) }} data-obsidian-ui-header>
    {{ $slot }}
</header>