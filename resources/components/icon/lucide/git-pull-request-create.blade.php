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
    <circle cx="6" cy="6" r="3" />
    <path d="M6 9v12" />
    <path d="M13 6h3a2 2 0 0 1 2 2v3" />
    <path d="M18 15v6" />
    <path d="M21 18h-6" />
</svg>