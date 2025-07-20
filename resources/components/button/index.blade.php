{{-- setting --}}

@props(
[
    'label'   => null,
    'variant' => 'default',
])

{{-- classes --}}

@php

    $classes = ObsidianUI::classes()
        ->add('[:where(&)]:px-6')
        ->add('[:where(&)]:py-3')
        ->add('[:where(&)]:relative')
        ->add('[:where(&)]:inline-flex')
        ->add('[:where(&)]:items-center')
        ->add('[:where(&)]:justify-center')
        ->add('[:where(&)]:text-sm')
        ->add('[:where(&)]:font-medium')
        ->add('[:where(&)]:leading-none')
        ->add('[:where(&)]:whitespace-nowrap')
        ->add('[:where(&)]:cursor-pointer')
        ->add('[:where(&)]:bg-clip-padding')
        ->add('[:where(&)]:border')

        ->add('disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none')

        ->add(match ($variant) // COLOR
        {
            'primary' => 'text-[var(--obsidian-text-color-primary)]',
            'filled'  => 'text-[var(--obsidian-text-color-highlight)]',
            'ghost'   => 'text-[var(--obsidian-text-color-highlight)]',
            'subtle'  => 'text-[var(--obsidian-text-color)]/70 hover:text-[var(--obsidian-text-color-highlight)]',
            'success' => 'text-[var(--obsidian-color-white)]',
            'warning' => 'text-[var(--obsidian-color-white)]',
            'danger'  => 'text-[var(--obsidian-color-white)]',
            'info'    => 'text-[var(--obsidian-color-white)]',
            'outline' => 'text-[var(--obsidian-text-color)] hover:text-[var(--obsidian-text-color-highlight)]',
            default   => 'text-[var(--obsidian-text-color-highlight)]',

        })->add(match ($variant) // BACKGROUND
        {
            'primary' => 'bg-[var(--obsidian-color-primary)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-primary),_black_10%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-primary),_white_10%)]',
            'filled'  => 'bg-[var(--obsidian-color-base-100)] dark:bg-[var(--obsidian-color-base-800)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-base-100),_black_5%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-base-800),_white_5%)]',
            'ghost'   => 'bg-transparent hover:bg-[var(--obsidian-color-base-100)] dark:hover:bg-[var(--obsidian-color-base-700)]',
            'subtle'  => 'bg-transparent hover:bg-[var(--obsidian-color-base-100)] dark:hover:bg-[var(--obsidian-color-base-700)]',
            'success' => 'bg-[var(--obsidian-color-success)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-success),_black_10%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-success),_white_10%)]',
            'warning' => 'bg-[var(--obsidian-color-warning)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-warning),_black_10%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-warning),_white_10%)]',
            'danger'  => 'bg-[var(--obsidian-color-danger)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-danger),_black_10%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-danger),_white_20%)]',
            'info'    => 'bg-[var(--obsidian-color-info)] hover:bg-[color-mix(in_srgb,_var(--obsidian-color-info),_black_10%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-info),_white_10%)]',
            'outline' => 'bg-transparent dark:bg-transparent',
            default   => 'bg-white dark:bg-[var(--obsidian-color-base-700)] hover:bg-[color-mix(in_srgb,_white,_black_3%)] dark:hover:bg-[color-mix(in_srgb,_var(--obsidian-color-base-700),_white_3%)]',

        })->add(match ($variant) // BORDER
        {
            'primary' => 'border-[var(--obsidian-color-primary)]',
            'filled'  => 'border-[var(--obsidian-color-base-100)] dark:border-[var(--obsidian-color-base-800)]',
            'ghost'   => 'border-transparent hover:border-[var(--obsidian-color-base-100)] dark:hover:border-[var(--obsidian-color-base-700)]',
            'subtle'  => 'border-transparent hover:border-[var(--obsidian-color-base-100)] dark:hover:border-[var(--obsidian-color-base-700)]',
            'success' => 'border-[var(--obsidian-color-success)]',
            'warning' => 'border-[var(--obsidian-color-warning)]',
            'danger'  => 'border-[var(--obsidian-color-danger)]',
            'info'    => 'border-[var(--obsidian-color-info)]',
            'outline' => 'border-[var(--obsidian-text-color)] hover:border-[var(--obsidian-text-color-highlight)]',
            default   => 'border-[var(--obsidian-color-base-200)] hover:border-[var(--obsidian-color-base-200)] dark:border-[var(--obsidian-color-base-600)] dark:hover:border-[var(--obsidian-color-base-600)]',

        })->add(match ($variant) // SHADOW
        {
            'primary' => '[:where(&)]:shadow-xs',
            'filled'  => '[:where(&)]:shadow-xs',
            'ghost'   => '[:where(&)]:shadow-none',
            'subtle'  => '[:where(&)]:shadow-none',
            'success' => '[:where(&)]:shadow-xs',
            'warning' => '[:where(&)]:shadow-xs',
            'danger'  => '[:where(&)]:shadow-xs',
            'info'    => '[:where(&)]:shadow-xs',
            'outline' => '[:where(&)]:shadow-none',
            default   => '[:where(&)]:shadow-xs',
        });

        $classes->add(config('obsidian-ui.button.rounded','rounded-full'));
@endphp

{{-- output --}}

<button {{ $attributes->class($classes) }}>
    @empty($label) {{ $slot }} @else {{ $label }} @endempty
</button>