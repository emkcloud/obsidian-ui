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
    <path d="M22 5V2l-5.89 5.89" />
    <circle cx="16.6" cy="15.89" r="3" />
    <circle cx="8.11" cy="7.4" r="3" />
    <circle cx="12.35" cy="11.65" r="3" />
    <circle cx="13.91" cy="5.85" r="3" />
    <circle cx="18.15" cy="10.09" r="3" />
    <circle cx="6.56" cy="13.2" r="3" />
    <circle cx="10.8" cy="17.44" r="3" />
    <circle cx="5" cy="19" r="3" />
</svg>