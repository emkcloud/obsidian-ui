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
    <path d="M10 3v11" />
    <path d="M10 9H7a1 1 0 0 1 0-6h8" />
    <path d="M14 3v11" />
    <path d="m18 14 4 4H2" />
    <path d="m22 18-4 4" />
</svg>