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
    <path d="M18.518 17.347A7 7 0 0 1 14 19" />
    <path d="M18.8 4A11 11 0 0 1 20 9" />
    <path d="M9 9h.01" />
    <circle cx="20" cy="16" r="2" />
    <circle cx="9" cy="9" r="7" />
    <rect x="4" y="16" width="10" height="6" rx="2" />
</svg>