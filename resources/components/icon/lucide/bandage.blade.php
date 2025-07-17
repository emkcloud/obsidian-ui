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
    <path d="M10 10.01h.01" />
    <path d="M10 14.01h.01" />
    <path d="M14 10.01h.01" />
    <path d="M14 14.01h.01" />
    <path d="M18 6v11.5" />
    <path d="M6 6v12" />
    <rect x="2" y="6" width="20" height="12" rx="2" />
</svg>