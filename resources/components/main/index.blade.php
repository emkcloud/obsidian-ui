{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:main] p-4')
        ->add('text-[var(--obsidian-base-text-color)]')
        ->add('bg-[var(--obsidian-base-background-color)]');
@endphp

{{-- output --}}

<main {{ $attributes->class($classes) }} data-obsidian-ui-main>
    {{ $slot }}
</main>