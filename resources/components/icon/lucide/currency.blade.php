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
    <circle cx="12" cy="12" r="8" />
    <line x1="3" x2="6" y1="3" y2="6" />
    <line x1="21" x2="18" y1="3" y2="6" />
    <line x1="3" x2="6" y1="21" y2="18" />
    <line x1="21" x2="18" y1="21" y2="18" />
</svg>