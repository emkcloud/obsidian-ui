{{-- setting --}}

@props(
[
    'sticky' => false,
    'border' => true,
    'transparent' => false,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:sidebar]')
        ->add('[:where(&)]:py-8')
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:overflow-y-auto')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]');

    if (ObsidianUI::isTrue($sticky))
    {
        $classes->add('[:where(&)]:sticky');
        $classes->add('[:where(&)]:top-0');
    }

    if (ObsidianUI::isTrue($border))
    {
        $classes->add('[:where(&)]:border-r');
        $classes->add('[:where(&)]:border-[var(--obsidian-base-border-color)]')
            ->add('group-[&[data-obsidian-ui-sidebars=right]]/template:[:where(&)]:border-0')
            ->add('group-[&[data-obsidian-ui-sidebars=right]]/template:[:where(&)]:border-l')
            ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-0')
            ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-l');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]');
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