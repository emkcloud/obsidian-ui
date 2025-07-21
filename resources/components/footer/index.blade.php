{{-- setting --}}

@props(
[
    'border' => true,
    'transparent' => false,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:footer]')
        ->add('[:where(&)]:py-6')
        ->add('[:where(&)]:text-[var(--obsidian-text-color)]');

    if (ObsidianUI::isTrue($border)) 
    {
        $classes->add('[:where(&)]:border-t');
        $classes->add('[:where(&)]:border-[var(--obsidian-border-color)]');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-background-color)]');
@endphp

{{-- output --}}

<footer {{ $attributes->class($classes) }} 

    data-obsidian-ui-footer
    data-obsidian-ui-footer-border="{{ ObsidianUI::boolean($border) }}"
    data-obsidian-ui-footer-transparent="{{ ObsidianUI::boolean($transparent) }}"

>{{ $slot }}</footer>