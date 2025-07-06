{{-- Credit: Lucide (https://lucide.dev) --}}

@props(['size' => 'standard'])

@php $classes = ObsidianUI::classes('shrink-0')->add(match($size)
{
    'large'    => '[:where(&)]:size-8 [:where(&)]:stroke-[1.5]',
    'standard' => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
    'small'    => '[:where(&)]:size-5 [:where(&)]:stroke-[2.4]',
    'micro'    => '[:where(&)]:size-4 [:where(&)]:stroke-[3.0]',
    default    => '[:where(&)]:size-6 [:where(&)]:stroke-[2.0]',
});
@endphp

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
    {{ $attributes->class($classes) }}
>
    <path d="M16 3h5v5" />
    <path d="M17 21h2a2 2 0 0 0 2-2" />
    <path d="M21 12v3" />
    <path d="m21 3-5 5" />
    <path d="M3 7V5a2 2 0 0 1 2-2" />
    <path d="m5 21 4.144-4.144a1.21 1.21 0 0 1 1.712 0L13 19" />
    <path d="M9 3h3" />
    <rect x="3" y="11" width="10" height="10" rx="1" />
</svg>