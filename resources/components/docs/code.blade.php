{{-- namespace --}}

@use('Phiki\Phiki')
@use('Phiki\Grammar\Grammar')
@use('Phiki\Theme\Theme')

{{-- setting --}}

@props(['language' => 'php','theme' => 'github-dark'])

{{-- setting --}}

@php $language = Str::lower($language); @endphp

@if (Grammar::tryFrom($language) == null)
    @php $language = Grammar::Txt @endphp
@endif

@if (Theme::tryFrom($theme) == null)
    @php $theme = Theme::GithubDark @endphp
@endif

{{-- output --}}

<div class="
overflow-auto
border rounded-2xl p-6 my-6
border-black/10
dark:border-white/8
bg-black/5
dark:bg-white/5


" 
data-obsidian-ui-docs-code>


    {!! (new Phiki())->codeToHtml($slot,$language,$theme) !!}
</div>
