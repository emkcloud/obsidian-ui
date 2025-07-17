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
    <path d="M9.31 9.31 5 21l7-4 7 4-1.17-3.17" />
    <path d="M14.53 8.88 12 2l-1.17 3.17" />
    <line x1="2" x2="22" y1="2" y2="22" />
</svg>