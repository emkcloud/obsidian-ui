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
    <path d="M4 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2" />
    <path d="M10 22H8" />
    <path d="M16 22h-2" />
    <circle cx="8" cy="8" r="2" />
    <path d="M9.414 9.414 12 12" />
    <path d="M14.8 14.8 18 18" />
    <circle cx="8" cy="16" r="2" />
    <path d="m18 6-8.586 8.586" />
</svg>