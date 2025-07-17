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
    <path d="M 20 4 A2 2 0 0 1 22 6" />
    <path d="M 22 6 L 22 16.41" />
    <path d="M 7 16 L 16 16" />
    <path d="M 9.69 4 L 20 4" />
    <path d="M14 8h.01" />
    <path d="M18 8h.01" />
    <path d="m2 2 20 20" />
    <path d="M20 20H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2" />
    <path d="M6 8h.01" />
    <path d="M8 12h.01" />
</svg>