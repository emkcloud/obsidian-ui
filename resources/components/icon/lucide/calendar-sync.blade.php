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
    <path d="M11 10v4h4" />
    <path d="m11 14 1.535-1.605a5 5 0 0 1 8 1.5" />
    <path d="M16 2v4" />
    <path d="m21 18-1.535 1.605a5 5 0 0 1-8-1.5" />
    <path d="M21 22v-4h-4" />
    <path d="M21 8.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h4.3" />
    <path d="M3 10h4" />
    <path d="M8 2v4" />
</svg>