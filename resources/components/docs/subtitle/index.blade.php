{{-- setting --}}

@props(
[
    'title' => '',
    'label' => '',
])

{{-- setting --}}

@empty($label) @php $label = Str::trim($title); @endphp @endempty
@empty($name ) @php $name  = Str::slug($label); @endphp @endempty

{{-- setting --}}

@php ObsidianUI::section()->subtitle(
[
    'title' => $title,
    'label' => $label,
    'name'  => $name,
]);
@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:mb-6')
        ->add('[:where(&)]:text-xl')
        ->add('[:where(&)]:font-semibold')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color-highlight)]');
@endphp

{{-- output --}}

<h3 id="{{ $name }}" {{ $attributes->class($classes) }} data-obsidian-ui-docs-subtitle>
    {{ $title }}{{ $slot }}
</h3>