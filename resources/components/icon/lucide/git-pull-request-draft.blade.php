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
    <circle cx="18" cy="18" r="3" />
    <circle cx="6" cy="6" r="3" />
    <path d="M18 6V5" />
    <path d="M18 11v-1" />
    <line x1="6" x2="6" y1="9" y2="21" />
</svg>