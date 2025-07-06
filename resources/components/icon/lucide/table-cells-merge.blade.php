{{-- Credit: Lucide (https://lucide.dev) --}}

@props(['size' => 'standard'])

{{-- output --}}

<svg xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
    data-obsidian-ui-icon
    {{ $attributes->class(ObsidianUI::classesIcon($size)) }}
>
    <path d="M12 21v-6" />
    <path d="M12 9V3" />
    <path d="M3 15h18" />
    <path d="M3 9h18" />
    <rect width="18" height="18" x="3" y="3" rx="2" />
</svg>