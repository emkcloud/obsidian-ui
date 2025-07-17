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
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]');

    if (ObsidianUI::isTrue($sticky))
    {
        $classes->add('[:where(&)]:sticky');
        $classes->add('[:where(&)]:top-0');
    }

    if (ObsidianUI::isTrue($border)) 
    {
        $classes->add('[:where(&)]:border-b');
        $classes->add('[:where(&)]:border-[var(--obsidian-base-border-color)]');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]');
@endphp

{{-- attributes --}}

@php $attrs = ObsidianUI::attributes(); 

    ObsidianUI::isTrue($container)
        ? $attrs->add('data-obsidian-ui-header-container','true')
        : $attrs->add('data-obsidian-ui-header-container','false');
@endphp

{{-- output --}}

<header x-data="obsidianui_header" {{ $attributes->class($classes)->merge($attrs->toArray()) }} data-obsidian-ui-header>
    {{ $slot }}
</header>