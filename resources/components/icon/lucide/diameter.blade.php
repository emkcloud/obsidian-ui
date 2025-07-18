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
    <circle cx="19" cy="19" r="2" />
    <circle cx="5" cy="5" r="2" />
    <path d="M6.48 3.66a10 10 0 0 1 13.86 13.86" />
    <path d="m6.41 6.41 11.18 11.18" />
    <path d="M3.66 6.48a10 10 0 0 0 13.86 13.86" />
</svg>