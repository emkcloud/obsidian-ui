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
    <path d="M2 12 7 2" />
    <path d="m7 12 5-10" />
    <path d="m12 12 5-10" />
    <path d="m17 12 5-10" />
    <path d="M4.5 7h15" />
    <path d="M12 16v6" />
</svg>