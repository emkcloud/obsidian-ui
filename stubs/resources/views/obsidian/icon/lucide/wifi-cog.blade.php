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
    <path d="m14.305 19.53.923-.382" />
    <path d="m15.228 16.852-.923-.383" />
    <path d="m16.852 15.228-.383-.923" />
    <path d="m16.852 20.772-.383.924" />
    <path d="m19.148 15.228.383-.923" />
    <path d="m19.53 21.696-.382-.924" />
    <path d="M2 7.82a15 15 0 0 1 20 0" />
    <path d="m20.772 16.852.924-.383" />
    <path d="m20.772 19.148.924.383" />
    <path d="M5 11.858a10 10 0 0 1 11.5-1.785" />
    <path d="M8.5 15.429a5 5 0 0 1 2.413-1.31" />
    <circle cx="18" cy="18" r="3" />
</svg>