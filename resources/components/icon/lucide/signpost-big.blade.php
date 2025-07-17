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
    <path d="M10 9H4L2 7l2-2h6" />
    <path d="M14 5h6l2 2-2 2h-6" />
    <path d="M10 22V4a2 2 0 1 1 4 0v18" />
    <path d="M8 22h8" />
</svg>