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
    <path d="M7 3.34V5a3 3 0 0 0 3 3" />
    <path d="M11 21.95V18a2 2 0 0 0-2-2 2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
    <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
    <path d="M12 2a10 10 0 1 0 9.54 13" />
    <path d="M20 6V4a2 2 0 1 0-4 0v2" />
    <rect width="8" height="5" x="14" y="6" rx="1" />
</svg>