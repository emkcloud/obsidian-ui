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
    <path d="M4 10a7.31 7.31 0 0 0 10 10Z" />
    <path d="m9 15 3-3" />
    <path d="M17 13a6 6 0 0 0-6-6" />
    <path d="M21 13A10 10 0 0 0 11 3" />
</svg>