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
    <path d="M12 13V2l8 4-8 4" />
    <path d="M20.561 10.222a9 9 0 1 1-12.55-5.29" />
    <path d="M8.002 9.997a5 5 0 1 0 8.9 2.02" />
</svg>