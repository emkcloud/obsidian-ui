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
    <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
    <line x1="8" x2="16" y1="12" y2="12" />
    <line x1="12" x2="12" y1="16" y2="16" />
    <line x1="12" x2="12" y1="8" y2="8" />
</svg>