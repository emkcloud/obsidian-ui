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
    <path d="M22 18H6a2 2 0 0 1-2-2V7a2 2 0 0 0-2-2" />
    <path d="M17 14V4a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v10" />
    <rect width="13" height="8" x="8" y="6" rx="1" />
    <circle cx="18" cy="20" r="2" />
    <circle cx="9" cy="20" r="2" />
</svg>