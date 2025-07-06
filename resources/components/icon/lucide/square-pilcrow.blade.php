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
    <rect width="18" height="18" x="3" y="3" rx="2" />
    <path d="M12 12H9.5a2.5 2.5 0 0 1 0-5H17" />
    <path d="M12 7v10" />
    <path d="M16 7v10" />
</svg>