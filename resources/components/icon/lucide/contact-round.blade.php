{{-- Credit: Lucide (https://lucide.dev) --}}

@props(['size' => 'standard'])

{{-- output --}}

<svg xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
    data-obsidian-ui-icon
    {{ $attributes->class(ObsidianUI::classesIcon($size)) }}
>
    <path d="M16 2v2" />
    <path d="M17.915 22a6 6 0 0 0-12 0" />
    <path d="M8 2v2" />
    <circle cx="12" cy="12" r="4" />
    <rect x="3" y="4" width="18" height="18" rx="2" />
</svg>