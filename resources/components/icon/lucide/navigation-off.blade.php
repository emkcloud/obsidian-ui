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
    <path d="M8.43 8.43 3 11l8 2 2 8 2.57-5.43" />
    <path d="M17.39 11.73 22 2l-9.73 4.61" />
    <line x1="2" x2="22" y1="2" y2="22" />
</svg>