{{-- setting --}}

@props(
[
    'sticky' => false,
    'border' => true,
    'transparent' => false,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:aside]')
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
        $classes->add('[:where(&)]:border-l');
        $classes->add('[:where(&)]:border-[var(--obsidian-base-border-color)]')
            ->add('group-[&[data-obsidian-ui-sidebars=left]]/template:[:where(&)]:border-0')
            ->add('group-[&[data-obsidian-ui-sidebars=left]]/template:[:where(&)]:border-r')
            ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-0')
            ->add('group-[&[data-obsidian-ui-sidebars=inverted]]/template:[:where(&)]:border-r');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]');
@endphp

{{-- output --}}

<aside {{ $attributes->class($classes) }} data-obsidian-ui-aside>
    {{ $slot }}
</aside>