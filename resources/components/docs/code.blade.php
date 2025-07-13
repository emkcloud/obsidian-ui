@use('Phiki\Phiki')
@use('Phiki\Grammar\Grammar')
@use('Phiki\Theme\Theme')

{{-- setting --}}

@props([
    'language' => Grammar::Php->name,
    'theme'    => Theme::GithubDark->name,
])

{{-- normalize --}}

@php 
    $language = ObsidianUI::normalizeCodeLanguage($language);
    $theme    = ObsidianUI::normalizeCodeTheme($theme);
@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:p-6')
        ->add('[:where(&)]:my-6')
        ->add('[:where(&)]:overflow-auto')
        ->add('[:where(&)]:border')
        ->add('[:where(&)]:rounded-2xl')
        ->add('[:where(&)]:border-black/10')
        ->add('[:where(&)]:dark:border-white/10');
@endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-code>
    {!! (new Phiki())->codeToHtml($slot,$language,$theme) !!}
</div>