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
    <rect width="7" height="12" x="2" y="6" rx="1" />
    <path d="M13 8.32a7.43 7.43 0 0 1 0 7.36" />
    <path d="M16.46 6.21a11.76 11.76 0 0 1 0 11.58" />
    <path d="M19.91 4.1a15.91 15.91 0 0 1 .01 15.8" />
</svg>