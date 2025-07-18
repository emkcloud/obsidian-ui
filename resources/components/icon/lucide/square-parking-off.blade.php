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
    <path d="M3.6 3.6A2 2 0 0 1 5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-.59 1.41" />
    <path d="M3 8.7V19a2 2 0 0 0 2 2h10.3" />
    <path d="m2 2 20 20" />
    <path d="M13 13a3 3 0 1 0 0-6H9v2" />
    <path d="M9 17v-2.3" />
</svg>