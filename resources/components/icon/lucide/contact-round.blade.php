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
    <path d="M16 2v2" />
    <path d="M17.915 22a6 6 0 0 0-12 0" />
    <path d="M8 2v2" />
    <circle cx="12" cy="12" r="4" />
    <rect x="3" y="4" width="18" height="18" rx="2" />
</svg>