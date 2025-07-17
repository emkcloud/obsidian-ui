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
    <path d="M13 12h8" />
    <path d="M13 18h8" />
    <path d="M13 6h8" />
    <path d="M3 12h1" />
    <path d="M3 18h1" />
    <path d="M3 6h1" />
    <path d="M8 12h1" />
    <path d="M8 18h1" />
    <path d="M8 6h1" />
</svg>