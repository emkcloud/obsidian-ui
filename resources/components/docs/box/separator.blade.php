{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:border-b')
        ->add('[:where(&)]:border-black/10')
        ->add('[:where(&)]:dark:border-white/10');
@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-box-separator></div>