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
    <path d="M12 20v-6" />
    <path d="M19.656 14H22" />
    <path d="M2 14h12" />
    <path d="m2 2 20 20" />
    <path d="M20 20H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2" />
    <path d="M9.656 4H20a2 2 0 0 1 2 2v10.344" />
</svg>