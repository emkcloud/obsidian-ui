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
    <path d="M7.2 14.8a2 2 0 0 1 2 2" />
    <circle cx="18.5" cy="8.5" r="3.5" />
    <circle cx="7.5" cy="16.5" r="5.5" />
    <circle cx="7.5" cy="4.5" r="2.5" />
</svg>