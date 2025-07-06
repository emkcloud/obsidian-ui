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
    <path d="M16 12h6" />
    <path d="M8 12H2" />
    <path d="M12 2v2" />
    <path d="M12 8v2" />
    <path d="M12 14v2" />
    <path d="M12 20v2" />
    <path d="m19 15 3-3-3-3" />
    <path d="m5 9-3 3 3 3" />
</svg>