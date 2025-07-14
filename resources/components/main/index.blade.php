{{-- classes --}}

@php $classes = ObsidianUI::classes('[grid-area:main]')
        ->add('[:where(&)]:py-8')
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:text-[var(--obsidian-base-text-color)]')
        ->add('[:where(&)]:bg-[var(--obsidian-base-background-color)]');
@endphp

{{-- output --}}

<main {{ $attributes->class($classes) }} data-obsidian-ui-main>
    {{ $slot }}
</main>