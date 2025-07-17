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
    <path d="M10 22v-5" />
    <path d="M14 19v-2" />
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <path d="M18 20v-3" />
    <path d="M2 13h20" />
    <path d="M20 13V7l-5-5H6a2 2 0 0 0-2 2v9" />
    <path d="M6 20v-3" />
</svg>