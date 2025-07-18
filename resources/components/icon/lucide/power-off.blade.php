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
    <path d="M18.36 6.64A9 9 0 0 1 20.77 15" />
    <path d="M6.16 6.16a9 9 0 1 0 12.68 12.68" />
    <path d="M12 2v4" />
    <path d="m2 2 20 20" />
</svg>