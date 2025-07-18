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
    <path d="M21 15V5a2 2 0 0 0-2-2H9" />
    <path d="m2 2 20 20" />
    <path d="M3.6 3.6c-.4.3-.6.8-.6 1.4v16l4-4h10" />
</svg>