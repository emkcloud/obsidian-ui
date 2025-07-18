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
    <path d="M12 16v6" />
    <path d="M14 20h-4" />
    <path d="M18 2h4v4" />
    <path d="m2 2 7.17 7.17" />
    <path d="M2 5.355V2h3.357" />
    <path d="m22 2-7.17 7.17" />
    <path d="M8 5 5 8" />
    <circle cx="12" cy="12" r="4" />
</svg>