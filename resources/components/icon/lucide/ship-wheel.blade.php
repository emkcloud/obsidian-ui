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
    <circle cx="12" cy="12" r="8" />
    <path d="M12 2v7.5" />
    <path d="m19 5-5.23 5.23" />
    <path d="M22 12h-7.5" />
    <path d="m19 19-5.23-5.23" />
    <path d="M12 14.5V22" />
    <path d="M10.23 13.77 5 19" />
    <path d="M9.5 12H2" />
    <path d="M10.23 10.23 5 5" />
    <circle cx="12" cy="12" r="2.5" />
</svg>