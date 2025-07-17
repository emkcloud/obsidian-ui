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
    <path d="M5 7v11a1 1 0 0 0 1 1h11" />
    <path d="M5.293 18.707 11 13" />
    <circle cx="19" cy="19" r="2" />
    <circle cx="5" cy="5" r="2" />
</svg>