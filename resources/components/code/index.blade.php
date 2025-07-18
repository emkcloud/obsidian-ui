{{-- setting --}}

@props(
[
    'themes'    => config('obsidian-ui.code.themes.light').','.
                   config('obsidian-ui.code.themes.dark'),
    'language'  => config('obsidian-ui.code.language'),
    'filename'  => null,
    'viewname'  => null,
    'clipboard' => true,
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

    <div x-data="obsidianui_code" class="relative">

        @if (ObsidianUI::isTrue($clipboard))

            <div class="absolute top-0 right-0 cursor-pointer opacity-80" x-show="!copied" @click="copy">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>
                    <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/>
                    <path d="M16 4h2a2 2 0 0 1 2 2v4"/>
                    <path d="M21 14H11"/>
                    <path d="m15 10-4 4 4 4"/>
                </svg>
            </div>

            <div class="absolute top-0 right-0 cursor-pointer opacity-80" x-cloak x-show="copied">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
            </div>

        @endif

        <div x-ref="code">{!! $code->output() !!}</div>

    </div>

</div>