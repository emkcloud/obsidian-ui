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
    <path d="M22 17h-3" />
    <path d="M22 7h-5" />
    <path d="M5 17H2" />
    <path d="M7 7H2" />
    <rect x="5" y="14" width="14" height="6" rx="2" />
    <rect x="7" y="4" width="10" height="6" rx="2" />
</svg>