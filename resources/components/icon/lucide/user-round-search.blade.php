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
    <circle cx="10" cy="8" r="5" />
    <path d="M2 21a8 8 0 0 1 10.434-7.62" />
    <circle cx="18" cy="18" r="3" />
    <path d="m22 22-1.9-1.9" />
</svg>