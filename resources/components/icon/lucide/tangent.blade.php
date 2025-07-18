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
    <circle cx="17" cy="4" r="2" />
    <path d="M15.59 5.41 5.41 15.59" />
    <circle cx="4" cy="17" r="2" />
    <path d="M12 22s-4-9-1.5-11.5S22 12 22 12" />
</svg>