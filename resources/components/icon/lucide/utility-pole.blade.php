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
    <path d="M12 2v20" />
    <path d="M2 5h20" />
    <path d="M3 3v2" />
    <path d="M7 3v2" />
    <path d="M17 3v2" />
    <path d="M21 3v2" />
    <path d="m19 5-7 7-7-7" />
</svg>