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
    <path d="M21 14h-5" />
    <path d="M16 16v-3.5a2.5 2.5 0 0 1 5 0V16" />
    <path d="M4.5 13h6" />
    <path d="m3 16 4.5-9 4.5 9" />
</svg>