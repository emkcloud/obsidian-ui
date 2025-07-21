{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:flex')
        ->add('[:where(&)]:flex-col');
@endphp

{{-- output --}}

<nav {{ $attributes->class($classes) }} data-obsidian-ui-navlist>{{ $slot }}</nav>