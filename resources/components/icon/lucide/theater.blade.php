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
    <path d="M2 10s3-3 3-8" />
    <path d="M22 10s-3-3-3-8" />
    <path d="M10 2c0 4.4-3.6 8-8 8" />
    <path d="M14 2c0 4.4 3.6 8 8 8" />
    <path d="M2 10s2 2 2 5" />
    <path d="M22 10s-2 2-2 5" />
    <path d="M8 15h8" />
    <path d="M2 22v-1a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1" />
    <path d="M14 22v-1a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1" />
</svg>