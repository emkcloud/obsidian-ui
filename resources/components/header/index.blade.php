{{-- setting --}}

@props(
[
    'sticky' => false,
    'border' => true,
    'container' => false,
    'transparent' => false,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:header]')
        ->add('[:where(&)]:z-30')
        ->add('[:where(&)]:h-18')
        ->add('[:where(&)]:items-center')
        ->add('[:where(&)]:text-[var(--obsidian-text-color)]');

    if (ObsidianUI::isTrue($sticky))
    {
        $classes->add('[:where(&)]:sticky');
        $classes->add('[:where(&)]:top-0');
    }

    if (ObsidianUI::isTrue($border)) 
    {
        $classes->add('[:where(&)]:border-b');
        $classes->add('[:where(&)]:border-[var(--obsidian-border-color)]');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-background-color)]');
@endphp

{{-- attributes --}}

@php $attrs = ObsidianUI::attributes(); 

    ObsidianUI::isTrue($container)
        ? $attrs->add('data-obsidian-ui-header-container','true')
        : $attrs->add('data-obsidian-ui-header-container','false');
@endphp

{{-- output --}}

<header {{ $attributes->class($classes)->merge($attrs->toArray()) }} x-data="obsidianui_header"

    data-obsidian-ui-header
    data-obsidian-ui-header-sticky="{{ ObsidianUI::boolean($sticky) }}"
    data-obsidian-ui-header-border="{{ ObsidianUI::boolean($border) }}"
    data-obsidian-ui-header-container="{{ ObsidianUI::boolean($container) }}"
    data-obsidian-ui-header-transparent="{{ ObsidianUI::boolean($transparent) }}"

>{{ $slot }}</header>