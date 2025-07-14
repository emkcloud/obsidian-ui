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
    $language = ObsidianUI::code()::normalizeLanguage($language);
    $theme    = ObsidianUI::code()::normalizeTheme($theme);
@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes(); @endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-code>
    {!! (new Phiki())->codeToHtml($slot,$language,
    
    [
    'light' => Theme::GithubLight,
    'dark' => Theme::GithubDark,
    ]
    
    
    ) !!}
</div>