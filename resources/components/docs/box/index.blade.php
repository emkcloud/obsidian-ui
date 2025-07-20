@use('Emkcloud\ObsidianUI\Enums\DocsBoxHeight')
@use('Emkcloud\ObsidianUI\Enums\DocsBoxPadding')
@use('Emkcloud\ObsidianUI\Enums\DocsBoxStacked')

{{-- setting --}}

@props(
[
    'height'  => DocsBoxHeight::defaultValue(),
    'padding' => DocsBoxPadding::defaultValue(),
    'stacked' => DocsBoxStacked::defaultValue(),
])

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:relative')
        ->add('[:where(&)]:p-6')
        ->add('[:where(&)]:border')
        ->add('[:where(&)]:rounded-2xl')
        ->add('[:where(&)]:border-black/10')
        ->add('[:where(&)]:dark:border-white/10');
@endphp

{{-- padding --}}

@php $classes->add(match($padding)
{
    DocsBoxPadding::NONE->value => '[:where(&)]:p-0',
    DocsBoxPadding::STANDARD->value => '[:where(&)]:p-6',
    DocsBoxPadding::RELAXED->value => '[:where(&)]:p-10',
    DocsBoxPadding::EXTENDED->value => '[:where(&)]:p-16',
    default => '[:where(&)]:p-6',
});
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

{{-- container --}}

@php $container = ObsidianUI::classes()->add(match($height)
{
    DocsBoxHeight::SMALL->value => '[:where(&)]:max-h-48',
    DocsBoxHeight::MEDIUM->value => '[:where(&)]:max-h-86',
    DocsBoxHeight::LARGE->value => '[:where(&)]:max-h-140',
    DocsBoxHeight::STANDARD->value => '[:where(&)]:max-h-none',
    default => '',

})->add('[:where(&)]:overflow-auto');

@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }}

    data-obsidian-ui-docs-box
    data-obsidian-ui-docs-box-height="{{ $height }}"
    data-obsidian-ui-docs-box-stacked="{{ $stacked }}"

><div class="{{ $container }}">{{ $slot }}</div></div>