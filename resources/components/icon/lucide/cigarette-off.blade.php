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
    <path d="M12 12H3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h13" />
    <path d="M18 8c0-2.5-2-2.5-2-5" />
    <path d="m2 2 20 20" />
    <path d="M21 12a1 1 0 0 1 1 1v2a1 1 0 0 1-.5.866" />
    <path d="M22 8c0-2.5-2-2.5-2-5" />
    <path d="M7 12v4" />
</svg>