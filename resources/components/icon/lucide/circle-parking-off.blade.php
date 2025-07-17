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
    <path d="M12.656 7H13a3 3 0 0 1 2.984 3.307" />
    <path d="M13 13H9" />
    <path d="M19.071 19.071A1 1 0 0 1 4.93 4.93" />
    <path d="m2 2 20 20" />
    <path d="M8.357 2.687a10 10 0 0 1 12.956 12.956" />
    <path d="M9 17V9" />
</svg>