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
    <line x1="9" x2="9" y1="4" y2="20" />
    <path d="M4 7c0-1.7 1.3-3 3-3h13" />
    <path d="M18 20c-1.7 0-3-1.3-3-3V4" />
</svg>