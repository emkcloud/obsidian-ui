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
    <path d="M15 12h6" />
    <path d="M15 6h6" />
    <path d="m3 13 3.553-7.724a.5.5 0 0 1 .894 0L11 13" />
    <path d="M3 18h18" />
    <path d="M3.92 11h6.16" />
</svg>