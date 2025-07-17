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
    <path d="M10 18h10" />
    <path d="m17 21 3-3-3-3" />
    <path d="M3 11h.01" />
    <rect x="15" y="3" width="5" height="8" rx="2.5" />
    <rect x="6" y="3" width="5" height="8" rx="2.5" />
</svg>