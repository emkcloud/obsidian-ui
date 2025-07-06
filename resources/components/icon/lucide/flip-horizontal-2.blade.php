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
    <path d="m3 7 5 5-5 5V7" />
    <path d="m21 7-5 5 5 5V7" />
    <path d="M12 20v2" />
    <path d="M12 14v2" />
    <path d="M12 8v2" />
    <path d="M12 2v2" />
</svg>