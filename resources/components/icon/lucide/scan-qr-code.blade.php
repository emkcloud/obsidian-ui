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
    <path d="M17 12v4a1 1 0 0 1-1 1h-4" />
    <path d="M17 3h2a2 2 0 0 1 2 2v2" />
    <path d="M17 8V7" />
    <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
    <path d="M3 7V5a2 2 0 0 1 2-2h2" />
    <path d="M7 17h.01" />
    <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
    <rect x="7" y="7" width="5" height="5" rx="1" />
</svg>