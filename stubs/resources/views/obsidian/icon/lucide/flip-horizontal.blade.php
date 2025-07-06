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
    <path d="M8 3H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h3" />
    <path d="M16 3h3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-3" />
    <path d="M12 20v2" />
    <path d="M12 14v2" />
    <path d="M12 8v2" />
    <path d="M12 2v2" />
</svg>