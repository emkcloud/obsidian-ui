{{-- classes --}}

@php
    $classes = ObsidianUI::classes('[grid-area:aside]')
        ->add('w-70 p-6')
        ->add('text-[var(--obsidian-base-text-color)]')
        ->add('bg-[var(--obsidian-base-background-color)]')
        ->add('border-l border-[var(--obsidian-base-border-color)]');
@endphp

{{-- output --}}

<aside {{ $attributes->class($classes) }} data-obsidian-ui-aside>
    {{ $slot }}
</aside>