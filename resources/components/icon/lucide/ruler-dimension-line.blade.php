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
    <path d="M12 15v-3.014" />
    <path d="M16 15v-3.014" />
    <path d="M20 6H4" />
    <path d="M20 8V4" />
    <path d="M4 8V4" />
    <path d="M8 15v-3.014" />
    <rect x="3" y="12" width="18" height="7" rx="1" />
</svg>