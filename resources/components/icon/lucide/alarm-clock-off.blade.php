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
    <path d="M6.87 6.87a8 8 0 1 0 11.26 11.26" />
    <path d="M19.9 14.25a8 8 0 0 0-9.15-9.15" />
    <path d="m22 6-3-3" />
    <path d="M6.26 18.67 4 21" />
    <path d="m2 2 20 20" />
    <path d="M4 4 2 6" />
</svg>