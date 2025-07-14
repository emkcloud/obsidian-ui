@use('Emkcloud\ObsidianUI\Enums\DocsBoxStacked')

{{-- setting --}}

@props(['stacked' => DocsBoxStacked::defaultValue()])

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:relative')
        ->add('[:where(&)]:p-6')
        ->add('[:where(&)]:overflow-auto')
        ->add('[:where(&)]:border')
        ->add('[:where(&)]:rounded-2xl')
        ->add('[:where(&)]:border-black/10')
        ->add('[:where(&)]:dark:border-white/10');
@endphp

{{-- stacked --}}

@php $classes->add(match($stacked)
{
    DocsBoxStacked::STANDALONE->value => '[:where(&)]:my-6',
    DocsBoxStacked::TOP->value => '[:where(&)]:mt-6 border-b-0 rounded-b-none',
    DocsBoxStacked::MIDDLE->value => '[:where(&)]:my-0',
    DocsBoxStacked::BOTTOM->value => '[:where(&)]:mb-6 border-t-0 rounded-t-none',
    default => '',
});
@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }}

    data-obsidian-ui-docs-box
    data-obsidian-ui-docs-box-stacked="{{ $stacked }}"

>{{ $slot }}</div>