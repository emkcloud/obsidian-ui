{{-- setting --}}

@props(
[
    'alternate' => false,
    'clipboard' => true,
    'content'   => null,
    'file'      => null,
    'language'  => config('obsidian-ui.code.language'),
    'gutter'    => false,
    'storage'   => null,
    'themes'    => config('obsidian-ui.code.themes.light').','.
                   config('obsidian-ui.code.themes.dark'),
    'viewname'  => null,
])

{{-- normalize --}}

@php $code = ObsidianUI::code()
        ->setLanguage($language)
        ->setThemes($themes)
        ->setSlot($slot)
        ->setGutter($gutter)
        ->setContent($content)
        ->setFile($file)
        ->setStorage($storage)
        ->setView($viewname);
@endphp

{{-- classes --}}

@php $classes = ObsidianUI::classes()
    ->add('[:where(&)]:w-full')
    ->add('[:where(&)]:max-h-[inherit]')
    ->add('[:where(&)]:relative');
@endphp

{{-- classes --}}

@php $codeclasses = ObsidianUI::classes()
    ->add('[:where(&)]:w-full')
    ->add('[:where(&)]:h-full')
    ->add('[:where(&)]:max-h-[inherit]')
    ->add('[:where(&)]:overflow-auto');
@endphp

{{-- attributes --}}

@php $attrs = ObsidianUI::attributes(); 

    ObsidianUI::isTrue($gutter)
        ? $attrs->add('data-obsidian-ui-code-line-numbers','true')
        : $attrs->add('data-obsidian-ui-code-line-numbers','false');

    ObsidianUI::isTrue($alternate)
        ? $attrs->add('data-obsidian-ui-code-alternate','true')
        : $attrs->add('data-obsidian-ui-code-alternate','false');
@endphp

{{-- output --}}

<div {{ $attributes->class($classes)->merge($attrs->toArray()) }} x-data="obsidianui_code" 

    data-obsidian-ui-code
    data-obsidian-ui-alternate="{{ ObsidianUI::boolean($alternate) }}"
    data-obsidian-ui-clipboard="{{ ObsidianUI::boolean($clipboard) }}"
    data-obsidian-ui-gutter="{{ ObsidianUI::boolean($gutter) }}"
>
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

    <div class="{{ $codeclasses }}" x-ref="code">{!! $code->output() !!}</div>

</div>