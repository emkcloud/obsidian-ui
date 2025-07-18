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
    <path d="M2 22V12a10 10 0 1 1 20 0v10" />
    <path d="M15 6.8v1.4a3 2.8 0 1 1-6 0V6.8" />
    <path d="M10 15h.01" />
    <path d="M14 15h.01" />
    <path d="M10 19a4 4 0 0 1-4-4v-3a6 6 0 1 1 12 0v3a4 4 0 0 1-4 4Z" />
    <path d="m9 19-2 3" />
    <path d="m15 19 2 3" />
</svg>