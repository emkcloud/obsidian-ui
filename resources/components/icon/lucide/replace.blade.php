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
    <path d="M14 4a2 2 0 0 1 2-2" />
    <path d="M16 10a2 2 0 0 1-2-2" />
    <path d="M20 2a2 2 0 0 1 2 2" />
    <path d="M22 8a2 2 0 0 1-2 2" />
    <path d="m3 7 3 3 3-3" />
    <path d="M6 10V5a3 3 0 0 1 3-3h1" />
    <rect x="2" y="14" width="8" height="8" rx="2" />
</svg>