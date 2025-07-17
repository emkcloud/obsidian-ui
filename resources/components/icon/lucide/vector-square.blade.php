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
    <path d="M19.5 7a24 24 0 0 1 0 10" />
    <path d="M4.5 7a24 24 0 0 0 0 10" />
    <path d="M7 19.5a24 24 0 0 0 10 0" />
    <path d="M7 4.5a24 24 0 0 1 10 0" />
    <rect x="17" y="17" width="5" height="5" rx="1" />
    <rect x="17" y="2" width="5" height="5" rx="1" />
    <rect x="2" y="17" width="5" height="5" rx="1" />
    <rect x="2" y="2" width="5" height="5" rx="1" />
</svg>