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
    <path d="M10 17H7l-4 4v-7" />
    <path d="M14 17h1" />
    <path d="M14 3h1" />
    <path d="M19 3a2 2 0 0 1 2 2" />
    <path d="M21 14v1a2 2 0 0 1-2 2" />
    <path d="M21 9v1" />
    <path d="M3 9v1" />
    <path d="M5 3a2 2 0 0 0-2 2" />
    <path d="M9 3h1" />
</svg>