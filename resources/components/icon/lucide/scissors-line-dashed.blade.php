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
    <path d="M5.42 9.42 8 12" />
    <circle cx="4" cy="8" r="2" />
    <path d="m14 6-8.58 8.58" />
    <circle cx="4" cy="16" r="2" />
    <path d="M10.8 14.8 14 18" />
    <path d="M16 12h-2" />
    <path d="M22 12h-2" />
</svg>