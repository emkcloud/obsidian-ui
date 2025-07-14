{{-- setting --}}

@props(
[
    'themes'   => config('obsidian-ui.code.themes.light').','.
                  config('obsidian-ui.code.themes.dark'),
    'language' => config('obsidian-ui.code.language'),
    'filename' => null,
    'viewname' => null,
])

{{-- normalize --}}

@php $code = ObsidianUI::code()
        ->setLanguage($language)
        ->setThemes($themes)
        ->setStream($slot)
        ->setFilename($filename)
        ->setViewname($viewname);
@endphp

{{-- output --}}

<div {{ $attributes }} data-obsidian-ui-code>
    {!! $code->output() !!}
</div>