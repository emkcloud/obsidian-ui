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
    <path d="M8 19H5c-1 0-2-1-2-2V7c0-1 1-2 2-2h3" />
    <path d="M16 5h3c1 0 2 1 2 2v10c0 1-1 2-2 2h-3" />
    <line x1="12" x2="12" y1="4" y2="20" />
</svg>