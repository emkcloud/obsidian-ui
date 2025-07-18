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
    <path d="M20.34 17.52a10 10 0 1 0-2.82 2.82" />
    <circle cx="19" cy="19" r="2" />
    <path d="m13.41 13.41 4.18 4.18" />
    <circle cx="12" cy="12" r="2" />
</svg>