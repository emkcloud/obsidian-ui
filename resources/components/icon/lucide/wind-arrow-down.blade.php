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
    <path d="M10 2v8" />
    <path d="M12.8 21.6A2 2 0 1 0 14 18H2" />
    <path d="M17.5 10a2.5 2.5 0 1 1 2 4H2" />
    <path d="m6 6 4 4 4-4" />
</svg>