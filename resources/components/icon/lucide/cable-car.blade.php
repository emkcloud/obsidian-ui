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
    <path d="M10 3h.01" />
    <path d="M14 2h.01" />
    <path d="m2 9 20-5" />
    <path d="M12 12V6.5" />
    <rect width="16" height="10" x="4" y="12" rx="3" />
    <path d="M9 12v5" />
    <path d="M15 12v5" />
    <path d="M4 17h16" />
</svg>