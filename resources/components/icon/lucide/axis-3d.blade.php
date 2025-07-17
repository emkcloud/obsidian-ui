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
    <path d="M13.5 10.5 15 9" />
    <path d="M4 4v15a1 1 0 0 0 1 1h15" />
    <path d="M4.293 19.707 6 18" />
    <path d="m9 15 1.5-1.5" />
</svg>