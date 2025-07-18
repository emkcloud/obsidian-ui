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
    <path d="M8 2v4" />
    <path d="M12 2v4" />
    <path d="M16 2v4" />
    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
    <path d="M20 12v2" />
    <path d="M20 18v2a2 2 0 0 1-2 2h-1" />
    <path d="M13 22h-2" />
    <path d="M7 22H6a2 2 0 0 1-2-2v-2" />
    <path d="M4 14v-2" />
    <path d="M4 8V6a2 2 0 0 1 2-2h2" />
    <path d="M8 10h6" />
    <path d="M8 14h8" />
    <path d="M8 18h5" />
</svg>