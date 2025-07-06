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
    data-obsidian-ui-icon
    {{ $attributes->class($classes) }}
>
    <path d="M8 2v4" />
    <path d="M12 2v4" />
    <path d="M16 2v4" />
    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
    <path d="M20 12v2" />
    <path d="M20 18v2a2 2 0 0 1-2 2h-1" />
    <path d="M13 22h-2" />
    <path d="M7 22H6a2 2 0 0 1-2-2v-2" />
    <path d="M4 14v-2" />
    <path d="M4 8V6a2 2 0 0 1 2-2h2" />
    <path d="M8 10h6" />
    <path d="M8 14h8" />
    <path d="M8 18h5" />
</svg>