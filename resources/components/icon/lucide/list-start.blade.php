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
    <path d="M16 12H3" />
    <path d="M16 18H3" />
    <path d="M10 6H3" />
    <path d="M21 18V8a2 2 0 0 0-2-2h-5" />
    <path d="m16 8-2-2 2-2" />
</svg>