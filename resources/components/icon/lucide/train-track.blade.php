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
    <path d="M2 17 17 2" />
    <path d="m2 14 8 8" />
    <path d="m5 11 8 8" />
    <path d="m8 8 8 8" />
    <path d="m11 5 8 8" />
    <path d="m14 2 8 8" />
    <path d="M7 22 22 7" />
</svg>