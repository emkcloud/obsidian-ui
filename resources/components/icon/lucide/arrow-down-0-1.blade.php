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
    <path d="m3 16 4 4 4-4" />
    <path d="M7 20V4" />
    <rect x="15" y="4" width="4" height="6" ry="2" />
    <path d="M17 20v-6h-2" />
    <path d="M15 20h4" />
</svg>