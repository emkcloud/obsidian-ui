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
    <path d="M10.17 4.193a2 2 0 0 1 3.666.013" />
    <path d="M14 21h2" />
    <path d="m15.874 7.743 1 1.732" />
    <path d="m18.849 12.952 1 1.732" />
    <path d="M21.824 18.18a2 2 0 0 1-1.835 2.824" />
    <path d="M4.024 21a2 2 0 0 1-1.839-2.839" />
    <path d="m5.136 12.952-1 1.732" />
    <path d="M8 21h2" />
    <path d="m8.102 7.743-1 1.732" />
</svg>