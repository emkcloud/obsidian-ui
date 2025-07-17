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
    <path d="M2 12h6" />
    <path d="M22 12h-6" />
    <path d="M12 2v2" />
    <path d="M12 8v2" />
    <path d="M12 14v2" />
    <path d="M12 20v2" />
    <path d="m19 9-3 3 3 3" />
    <path d="m5 15 3-3-3-3" />
</svg>