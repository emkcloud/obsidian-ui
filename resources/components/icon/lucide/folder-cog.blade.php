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
    <path d="M10.3 20H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.98a2 2 0 0 1 1.69.9l.66 1.2A2 2 0 0 0 12 6h8a2 2 0 0 1 2 2v3.3" />
    <path d="m14.305 19.53.923-.382" />
    <path d="m15.228 16.852-.923-.383" />
    <path d="m16.852 15.228-.383-.923" />
    <path d="m16.852 20.772-.383.924" />
    <path d="m19.148 15.228.383-.923" />
    <path d="m19.53 21.696-.382-.924" />
    <path d="m20.772 16.852.924-.383" />
    <path d="m20.772 19.148.924.383" />
    <circle cx="18" cy="18" r="3" />
</svg>