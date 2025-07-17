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
    <rect width="14" height="6" x="5" y="15" rx="2" />
    <rect width="10" height="6" x="7" y="3" rx="2" />
    <path d="M2 21h20" />
    <path d="M2 3h20" />
</svg>