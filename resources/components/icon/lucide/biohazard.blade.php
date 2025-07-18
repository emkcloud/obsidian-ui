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
    <circle cx="12" cy="11.9" r="2" />
    <path d="M6.7 3.4c-.9 2.5 0 5.2 2.2 6.7C6.5 9 3.7 9.6 2 11.6" />
    <path d="m8.9 10.1 1.4.8" />
    <path d="M17.3 3.4c.9 2.5 0 5.2-2.2 6.7 2.4-1.2 5.2-.6 6.9 1.5" />
    <path d="m15.1 10.1-1.4.8" />
    <path d="M16.7 20.8c-2.6-.4-4.6-2.6-4.7-5.3-.2 2.6-2.1 4.8-4.7 5.2" />
    <path d="M12 13.9v1.6" />
    <path d="M13.5 5.4c-1-.2-2-.2-3 0" />
    <path d="M17 16.4c.7-.7 1.2-1.6 1.5-2.5" />
    <path d="M5.5 13.9c.3.9.8 1.8 1.5 2.5" />
</svg>