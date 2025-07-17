{{-- Credit: Lucide (https://lucide.dev) --}}

@props(['size' => 'standard'])

{{-- output --}}

<svg data-obsidian-ui-icon
    width="24"
    height="24"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
    {{ $attributes->class(ObsidianUI::icon()->classes($size)) }}
>
    <path d="M14 12h2v8" />
    <path d="M14 20h4" />
    <path d="M6 12h4" />
    <path d="M6 20h4" />
    <path d="M8 20V8a4 4 0 0 1 7.464-2" />
</svg>