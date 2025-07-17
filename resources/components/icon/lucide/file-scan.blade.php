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
    <path d="M20 10V7l-5-5H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h4" />
    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
    <path d="M16 14a2 2 0 0 0-2 2" />
    <path d="M20 14a2 2 0 0 1 2 2" />
    <path d="M20 22a2 2 0 0 0 2-2" />
    <path d="M16 22a2 2 0 0 1-2-2" />
</svg>