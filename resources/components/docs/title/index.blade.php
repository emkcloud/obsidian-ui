{{-- setting --}}

@props(
[
    'main'  => false,
    'title' => '',
    'label' => '',
])

{{-- setting --}}

@empty($label) @php $label = Str::trim($title); @endphp @endempty
@empty($name ) @php $name  = Str::slug($label); @endphp @endempty

{{-- setting --}}

@php $heading = $main ? 'h1' : 'h2'; @endphp

{{-- setting --}}

@php ObsidianUI::section()->title(
[
    'main'  => $main,
    'title' => $title,
    'label' => $label,
    'name'  => $name,
]);
@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:mb-6')
        ->add('[:where(&)]:font-semibold')
        ->add('[:where(&)]:text-[var(--obsidian-text-color-highlight)]');
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