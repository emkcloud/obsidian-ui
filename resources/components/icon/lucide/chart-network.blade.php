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
    <path d="m13.11 7.664 1.78 2.672" />
    <path d="m14.162 12.788-3.324 1.424" />
    <path d="m20 4-6.06 1.515" />
    <path d="M3 3v16a2 2 0 0 0 2 2h16" />
    <circle cx="12" cy="6" r="2" />
    <circle cx="16" cy="12" r="2" />
    <circle cx="9" cy="15" r="2" />
</svg>