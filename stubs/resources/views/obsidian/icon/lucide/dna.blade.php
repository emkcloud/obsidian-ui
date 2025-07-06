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
    <path d="m10 16 1.5 1.5" />
    <path d="m14 8-1.5-1.5" />
    <path d="M15 2c-1.798 1.998-2.518 3.995-2.807 5.993" />
    <path d="m16.5 10.5 1 1" />
    <path d="m17 6-2.891-2.891" />
    <path d="M2 15c6.667-6 13.333 0 20-6" />
    <path d="m20 9 .891.891" />
    <path d="M3.109 14.109 4 15" />
    <path d="m6.5 12.5 1 1" />
    <path d="m7 18 2.891 2.891" />
    <path d="M9 22c1.798-1.998 2.518-3.995 2.807-5.993" />
</svg>