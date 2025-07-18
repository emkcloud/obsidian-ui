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
    <path d="M14 14v2" />
    <path d="M14 20v2" />
    <path d="M14 2v2" />
    <path d="M14 8v2" />
    <path d="M2 15h8" />
    <path d="M2 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2" />
    <path d="M2 9h8" />
    <path d="M22 15h-4" />
    <path d="M22 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2" />
    <path d="M22 9h-4" />
    <path d="M5 3v18" />
</svg>