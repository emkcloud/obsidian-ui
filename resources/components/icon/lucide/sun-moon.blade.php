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
    <path d="M12 2v2" />
    <path d="M13 8.129A4 4 0 0 1 15.873 11" />
    <path d="m19 5-1.256 1.256" />
    <path d="M20 12h2" />
    <path d="M9 8a5 5 0 1 0 7 7 7 7 0 1 1-7-7" />
</svg>