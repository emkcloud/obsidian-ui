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
    <circle cx="12" cy="12" r="2" />
    <path d="M12 2v4" />
    <path d="m6.8 15-3.5 2" />
    <path d="m20.7 7-3.5 2" />
    <path d="M6.8 9 3.3 7" />
    <path d="m20.7 17-3.5-2" />
    <path d="m9 22 3-8 3 8" />
    <path d="M8 22h8" />
    <path d="M18 18.7a9 9 0 1 0-12 0" />
</svg>