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
    <path d="M14 3v11" />
    <path d="M14 9h-3a3 3 0 0 1 0-6h9" />
    <path d="M18 3v11" />
    <path d="M22 18H2l4-4" />
    <path d="m6 22-4-4" />
</svg>