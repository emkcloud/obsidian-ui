{{-- setting --}}

@props(
[
    'color' => null,
    'icon' => null,
    'iconClass' => null,
    'iconTrailing' => null,
    'label' => null,
    'size' => null,
    'rounded' => null,
    'variant' => null,
])

{{-- classes --}}

@php $classes = ObsidianUI::classes()
        ->add('[:where(&)]:align-bottom')
        ->add('[:where(&)]:relative')
        ->add('[:where(&)]:inline-flex')
        ->add('[:where(&)]:items-center')
        ->add('[:where(&)]:justify-between')
        ->add('[:where(&)]:space-x-2')
        ->add('[:where(&)]:font-medium')
        ->add('[:where(&)]:leading-none')
        ->add('[:where(&)]:whitespace-nowrap')
        ->add('[:where(&)]:cursor-pointer')
        ->add('[:where(&)]:bg-clip-padding')
        ->add('[:where(&)]:border')
        ->add('[:where(&)]:transition')
        ->add('[:where(&)]:disabled:cursor-default')
        ->add('[:where(&)]:disabled:pointer-events-none')
        ->add('[:where(&)]:disabled:opacity-70')
        ->add('[:where(&)]:dark:disabled:opacity-70');
@endphp

{{-- size --}}

@php $classes->add(match($size) // BUTTON SIZE
{
    'xs'    => '[:where(&)]:text-xs [:where(&)]:px-3 [:where(&)]:h-6',
    'sm'    => '[:where(&)]:text-sm [:where(&)]:px-3 [:where(&)]:h-8',
    'lg'    => '[:where(&)]:text-lg [:where(&)]:px-6 [:where(&)]:h-12',
    default => '[:where(&)]:text-sm [:where(&)]:px-4 [:where(&)]:h-10',
});
@endphp

{{-- primary --}}

@php if ($variant === 'primary')
{
    $classes->add(match ($color) // PRIMARY COLOR
    {
        'amber'   => '[--obsidian-button-primary-color:var(--color-amber-400)]',
        'blue'    => '[--obsidian-button-primary-color:var(--color-blue-500)]',
        'cyan'    => '[--obsidian-button-primary-color:var(--color-cyan-600)]',
        'emerald' => '[--obsidian-button-primary-color:var(--color-emerald-600)]',
        'fuchsia' => '[--obsidian-button-primary-color:var(--color-fuchsia-600)]',
        'gray'    => '[--obsidian-button-primary-color:var(--color-gray-800)]',
        'green'   => '[--obsidian-button-primary-color:var(--color-green-600)]',
        'indigo'  => '[--obsidian-button-primary-color:var(--color-indigo-500)]',
        'lime'    => '[--obsidian-button-primary-color:var(--color-lime-400)]',
        'neutral' => '[--obsidian-button-primary-color:var(--color-neutral-800)]',
        'orange'  => '[--obsidian-button-primary-color:var(--color-orange-500)]',
        'pink'    => '[--obsidian-button-primary-color:var(--color-pink-600)]',
        'purple'  => '[--obsidian-button-primary-color:var(--color-purple-500)]',
        'red'     => '[--obsidian-button-primary-color:var(--color-red-500)]',
        'rose'    => '[--obsidian-button-primary-color:var(--color-rose-600)]',
        'sky'     => '[--obsidian-button-primary-color:var(--color-sky-600)]',
        'slate'   => '[--obsidian-button-primary-color:var(--color-slate-800)]',
        'stone'   => '[--obsidian-button-primary-color:var(--color-stone-800)]',
        'teal'    => '[--obsidian-button-primary-color:var(--color-teal-600)]',
        'violet'  => '[--obsidian-button-primary-color:var(--color-violet-500)]',
        'zinc'    => '[--obsidian-button-primary-color:var(--color-zinc-800)]',
        'yellow'  => '[--obsidian-button-primary-color:var(--color-yellow-400)]',
        default   => '[--obsidian-button-primary-color:var(--obsidian-color-primary)]',
    });

    $classes->add(match ($color) // PRIMARY COLOR HOVER
    {
        'amber'   => '[--obsidian-button-primary-color-hover:var(--color-amber-300)]',
        'blue'    => '[--obsidian-button-primary-color-hover:var(--color-blue-400)]',
        'cyan'    => '[--obsidian-button-primary-color-hover:var(--color-cyan-500)]',
        'emerald' => '[--obsidian-button-primary-color-hover:var(--color-emerald-500)]',
        'fuchsia' => '[--obsidian-button-primary-color-hover:var(--color-fuchsia-500)]',
        'gray'    => '[--obsidian-button-primary-color-hover:var(--color-gray-700)]',
        'green'   => '[--obsidian-button-primary-color-hover:var(--color-green-500)]',
        'indigo'  => '[--obsidian-button-primary-color-hover:var(--color-indigo-400)]',
        'lime'    => '[--obsidian-button-primary-color-hover:var(--color-lime-300)]',
        'neutral' => '[--obsidian-button-primary-color-hover:var(--color-neutral-700)]',
        'orange'  => '[--obsidian-button-primary-color-hover:var(--color-orange-400)]',
        'pink'    => '[--obsidian-button-primary-color-hover:var(--color-pink-500)]',
        'purple'  => '[--obsidian-button-primary-color-hover:var(--color-purple-400)]',
        'red'     => '[--obsidian-button-primary-color-hover:var(--color-red-400)]',
        'rose'    => '[--obsidian-button-primary-color-hover:var(--color-rose-500)]',
        'sky'     => '[--obsidian-button-primary-color-hover:var(--color-sky-500)]',
        'slate'   => '[--obsidian-button-primary-color-hover:var(--color-slate-700)]',
        'stone'   => '[--obsidian-button-primary-color-hover:var(--color-stone-700)]',
        'teal'    => '[--obsidian-button-primary-color-hover:var(--color-teal-500)]',
        'violet'  => '[--obsidian-button-primary-color-hover:var(--color-violet-400)]',
        'zinc'    => '[--obsidian-button-primary-color-hover:var(--color-zinc-700)]',
        'yellow'  => '[--obsidian-button-primary-color-hover:var(--color-yellow-300)]',
        default   => '[--obsidian-button-primary-color-hover:var(--obsidian-color-primary-hover)]',
    });

    $classes->add(match ($color) // PRIMARY TEXT COLOR
    {
        'amber'   => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'blue'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'cyan'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'emerald' => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'fuchsia' => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'green'   => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'indigo'  => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'lime'    => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'orange'  => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'pink'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'purple'  => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'red'     => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'rose'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'sky'     => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'teal'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'violet'  => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'zinc'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'yellow'  => '[:where(&)]:text-[var(--obsidian-color-black)]',
        default   => '[:where(&)]:text-[var(--obsidian-color-white)]',
    });

    $classes->add('[:where(&)]:shadow-xs')
        ->add('[:where(&)]:border-[var(--obsidian-button-primary-color)]')
        ->add('[:where(&)]:hover:border-[var(--obsidian-button-primary-color-hover)]')
        ->add('[:where(&)]:dark:hover:border-[var(--obsidian-button-primary-color-hover)]')
        ->add('[:where(&)]:bg-[var(--obsidian-button-primary-color)]')
        ->add('[:where(&)]:hover:bg-[var(--obsidian-button-primary-color-hover)]')
        ->add('[:where(&)]:dark:hover:bg-[var(--obsidian-button-primary-color-hover)]');
}
@endphp

{{-- variant --}}

@php if ($variant != 'primary')
{
    $classes->add(match ($variant) // VARIANT COLOR
    {
        'danger'  => '[--obsidian-button-variant-color:var(--color-red-600)]',
        'filled'  => '[--obsidian-button-variant-color:var(--obsidian-color-base-100)]',
        'ghost'   => '[--obsidian-button-variant-color:var(--obsidian-color-transparent)]',
        'info'    => '[--obsidian-button-variant-color:var(--color-blue-600)]',
        'outline' => '[--obsidian-button-variant-color:var(--obsidian-color-transparent)]',
        'subtle'  => '[--obsidian-button-variant-color:var(--obsidian-color-transparent)]',
        'success' => '[--obsidian-button-variant-color:var(--color-green-600)]',
        'warning' => '[--obsidian-button-variant-color:var(--color-orange-600)]',
        default   => '[--obsidian-button-variant-color:var(--obsidian-color-base)]',
    });

    $classes->add(match ($variant) // VARIANT COLOR HOVER
    {
        'danger'  => '[--obsidian-button-variant-color-hover:var(--color-red-500)]',
        'filled'  => '[--obsidian-button-variant-color-hover:var(--obsidian-color-base-200)]',
        'ghost'   => '[--obsidian-button-variant-color-hover:var(--obsidian-color-base-100)]',
        'info'    => '[--obsidian-button-variant-color-hover:var(--color-blue-500)]',
        'outline' => '[--obsidian-button-variant-color-hover:var(--obsidian-color-transparent)]',
        'subtle'  => '[--obsidian-button-variant-color-hover:var(--obsidian-color-base-100)]',
        'success' => '[--obsidian-button-variant-color-hover:var(--color-green-500)]',
        'warning' => '[--obsidian-button-variant-color-hover:var(--color-orange-500)]',
        default   => '[--obsidian-button-variant-color-hover:var(--obsidian-color-base-100)]',
    });

    $classes->add(match ($variant) // VARIANT COLOR DARK
    {
        'danger'  => '[--obsidian-button-variant-dark:var(--color-red-600)]',
        'filled'  => '[--obsidian-button-variant-dark:var(--obsidian-color-base-800)]',
        'ghost'   => '[--obsidian-button-variant-dark:var(--obsidian-color-transparent)]',
        'info'    => '[--obsidian-button-variant-dark:var(--color-blue-600)]',
        'outline' => '[--obsidian-button-variant-dark:var(--obsidian-color-transparent)]',
        'subtle'  => '[--obsidian-button-variant-dark:var(--obsidian-color-transparent)]',
        'success' => '[--obsidian-button-variant-dark:var(--color-green-600)]',
        'warning' => '[--obsidian-button-variant-dark:var(--color-orange-600)]',
        default   => '[--obsidian-button-variant-dark:var(--obsidian-color-base-700)]',
    });

    $classes->add(match ($variant) // VARIANT COLOR DARK HOVER
    {
        'danger'  => '[--obsidian-button-variant-dark-hover:var(--color-red-500)]',
        'filled'  => '[--obsidian-button-variant-dark-hover:var(--obsidian-color-base-700)]',
        'ghost'   => '[--obsidian-button-variant-dark-hover:var(--obsidian-color-base-700)]',
        'info'    => '[--obsidian-button-variant-dark-hover:var(--color-blue-500)]',
        'outline' => '[--obsidian-button-variant-dark-hover:var(--obsidian-color-transparent)]',
        'subtle'  => '[--obsidian-button-variant-dark-hover:var(--obsidian-color-base-700)]',
        'success' => '[--obsidian-button-variant-dark-hover:var(--color-green-500)]',
        'warning' => '[--obsidian-button-variant-dark-hover:var(--color-orange-500)]',
        default   => '[--obsidian-button-variant-dark-hover:var(--obsidian-color-base-600)]',
    });

    $classes->add(match ($variant) // VARIANT TEXT
    {
        'danger'  => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'filled'  => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'ghost'   => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'info'    => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'outline' => '[:where(&)]:text-[var(--obsidian-color-black)]',
        'subtle'  => '[:where(&)]:text-[var(--obsidian-color-black)]/60',
        'success' => '[:where(&)]:text-[var(--obsidian-color-white)]',
        'warning' => '[:where(&)]:text-[var(--obsidian-color-white)]',
        default   => '[:where(&)]:text-[var(--obsidian-color-black)]',
    });

    $classes->add(match ($variant) // VARIANT TEXT HOVER
    {
        'subtle'  => '[:where(&)]:hover:text-[var(--obsidian-color-black)]',
        default   => '[:where(&)]:hover:text-[var(--obsidian-color-black)]',
    });

    $classes->add(match ($variant) // VARIANT BORDER
    {
        'danger'  => '[:where(&)]:border-[var(--obsidian-button-variant-color)]',
        'filled'  => '[:where(&)]:border-[var(--obsidian-button-variant-color)]',
        'ghost'   => '[:where(&)]:border-[var(--obsidian-color-transparent)]',
        'info'    => '[:where(&)]:border-[var(--obsidian-button-variant-color)]',
        'outline' => '[:where(&)]:border-[var(--obsidian-color-black)]',
        'subtle'  => '[:where(&)]:border-[var(--obsidian-color-transparent)]',
        'success' => '[:where(&)]:border-[var(--obsidian-button-variant-color)]',
        'warning' => '[:where(&)]:border-[var(--obsidian-button-variant-color)]',
        default   => '[:where(&)]:border-[var(--obsidian-color-base-200)]',
    });

    $classes->add(match ($variant) // VARIANT BORDER HOVER
    {
        'danger'  => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'filled'  => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'ghost'   => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'info'    => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'outline' => '[:where(&)]:hover:border-[var(--obsidian-color-black)]',
        'subtle'  => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'success' => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        'warning' => '[:where(&)]:hover:border-[var(--obsidian-button-variant-color-hover)]',
        default   => '[:where(&)]:hover:border-[var(--obsidian-color-base-200)]',
    });

    $classes->add(match ($variant) // VARIANT DARK TEXT 
    {
        'danger'  => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'filled'  => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'ghost'   => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'info'    => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'outline' => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'subtle'  => '[:where(&)]:dark:text-[var(--obsidian-color-white)]/60',
        'success' => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        'warning' => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
        default   => '[:where(&)]:dark:text-[var(--obsidian-color-white)]',
    });

    $classes->add(match ($variant) // VARIANT DARK TEXT HOVER
    {
        'subtle'  => '[:where(&)]:dark:hover:text-[var(--obsidian-color-white)]',
        default   => '[:where(&)]:dark:hover:text-[var(--obsidian-color-white)]',
    });

    $classes->add(match ($variant) // VARIANT DARK BORDER
    {
        'danger'  => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
        'filled'  => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
        'ghost'   => '[:where(&)]:dark:border-[var(--obsidian-color-transparent)]',
        'info'    => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
        'outline' => '[:where(&)]:dark:border-[var(--obsidian-color-white)]',
        'subtle'  => '[:where(&)]:dark:border-[var(--obsidian-color-transparent)]',
        'success' => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
        'warning' => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
        default   => '[:where(&)]:dark:border-[var(--obsidian-button-variant-dark)]',
    });

    $classes->add(match ($variant) // VARIANT DARK BORDER HOVER
    {
        'danger'  => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'filled'  => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'ghost'   => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'info'    => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'outline' => '[:where(&)]:dark:hover:border-[var(--obsidian-color-white)]',
        'subtle'  => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'success' => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        'warning' => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark-hover)]',
        default   => '[:where(&)]:dark:hover:border-[var(--obsidian-button-variant-dark)]',
    });

    $classes->add(match ($variant) // SHADOW
    {
        'danger'  => '[:where(&)]:shadow-xs',
        'filled'  => '[:where(&)]:shadow-xs',
        'ghost'   => '[:where(&)]:shadow-none',
        'info'    => '[:where(&)]:shadow-xs',
        'outline' => '[:where(&)]:shadow-none',
        'subtle'  => '[:where(&)]:shadow-none',
        'success' => '[:where(&)]:shadow-xs',
        'warning' => '[:where(&)]:shadow-xs',
        default   => '[:where(&)]:shadow-xs',
    });

    $classes
        ->add('[:where(&)]:bg-[var(--obsidian-button-variant-color)]')
        ->add('[:where(&)]:hover:bg-[var(--obsidian-button-variant-color-hover)]')
        ->add('[:where(&)]:dark:bg-[var(--obsidian-button-variant-dark)]')
        ->add('[:where(&)]:dark:hover:bg-[var(--obsidian-button-variant-dark-hover)]');
}
@endphp

{{-- rounded --}}

@php $classes->add(match($rounded) // BUTTON ROUNDED
{
    'sm'    => '[:where(&)]:rounded-sm',
    'lg'    => '[:where(&)]:rounded-lg',
    'xl'    => '[:where(&)]:rounded-xl',
    'none'  => '[:where(&)]:rounded-none',
    default => config('obsidian-ui.button.rounded','rounded-full'),
});
@endphp

{{-- icons --}}

@php $icons = ObsidianUI::classes()->add(match($size)
{
    'xs'    => 'size-3',
    'sm'    => 'size-3.5',
    'lg'    => 'size-5',
    default => 'size-4',

})->add($iconClass);

@endphp

{{-- content --}}

@php $content = Str::trim($label) ?: Str::trim($slot); @endphp

{{-- exceptions --}}

@php $elements = 0;

    if ($icon         ) $elements += 1;
    if ($iconTrailing ) $elements += 1;
    if ($content      ) $elements += 2;

    if ($elements == 1) $classes->add('aspect-square px-0 justify-center');

@endphp

{{-- output --}}

<button type="button" {{ $attributes->class($classes) }} data-obsidian-ui-button>
    @if ($icon) <x-obsidian::icon name="{{ $icon }}" class="{{ $icons }}"/> @endif
    @if ($content) <span class="flex-1">{{ $content }}</span> @endif
    @if ($iconTrailing) <x-obsidian::icon name="{{ $iconTrailing }}" class="{{ $icons }}"/> @endif
</button>