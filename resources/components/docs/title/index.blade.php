{{-- setting --}}

@props(['main' => false])

{{-- setting --}}

@php $heading = $main ? 'h1' : 'h2'; @endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:mb-6')
        ->add('[:where(&)]:font-semibold')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color-highlight)]');
@endphp

{{-- classes --}}

@unless ($main)
    @php $classes->add('[:where(&)]:text-2xl'); @endphp
@else
    @php $classes->add('[:where(&)]:text-3xl'); @endphp
@endunless

{{-- output --}}

<{{ $heading }} {{ $attributes->class($classes) }} data-obsidian-ui-docs-title>
    {{ $slot }}
</{{ $heading }}>