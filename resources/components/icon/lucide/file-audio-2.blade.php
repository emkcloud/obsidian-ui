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
    <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v2" />
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <circle cx="3" cy="17" r="1" />
    <path d="M2 17v-3a4 4 0 0 1 8 0v3" />
    <circle cx="9" cy="17" r="1" />
</svg>