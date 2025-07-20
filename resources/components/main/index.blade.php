{{-- setting --}}

@props(
[
    'border' => false,
    'transparent' => false,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:main]')
        ->add('[:where(&)]:py-8')
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:text-[var(--obsidian-text-color)]');

    if (ObsidianUI::isTrue($border)) 
    {
        $classes->add('[:where(&)]:border');
        $classes->add('[:where(&)]:border-[var(--obsidian-border-color)]');
    }

    ObsidianUI::isTrue($transparent)
        ? $classes->add('[:where(&)]:bg-transparent')
        : $classes->add('[:where(&)]:bg-[var(--obsidian-background-color)]');
@endphp

{{-- output --}}

<main {{ $attributes->class($classes) }} data-obsidian-ui-main>
    {{ $slot }}
</main>