{{-- setting --}}

@props(['variant' => 'default'])

{{-- classes --}}

@php

    $classes = ObsidianUI::classes()

        ->add('relative px-4 py-3 cursor-pointer')
        ->add('text-sm font-medium leading-none whitespace-nowrap')
        ->add('inline-flex items-center justify-center')
        ->add('border bg-clip-padding rounded-lg [:where(&)]:shadow-xs')
        ->add('disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none')

        ->add(match ($variant) // COLOR
        {
            'primary' => 'text-[var(--obsidian-color-accent-foreground)]',
            'filled'  => 'text-[var(--obsidian-color-800)] dark:text-[var(--obsidian-color-white)]/90',
            'ghost'   => 'text-[var(--obsidian-color-800)] dark:text-[var(--obsidian-color-white)]/90',
            'outline' => 'text-[var(--obsidian-color-800)] dark:text-[var(--obsidian-color-white)]/90',
            'danger'  => 'text-[var(--obsidian-color-white)]/90',
            'info'    => 'text-[var(--obsidian-color-white)]/90',
            'success' => 'text-[var(--obsidian-color-white)]/90',
            'warning' => 'text-[var(--obsidian-color-white)]/90',
            default   => 'text-[var(--obsidian-color-800)] dark:text-[var(--obsidian-color-white)]/90',
        })

        ->add(match ($variant) // BACKGROUND
        {
            'primary' => 'bg-[var(--obsidian-color-accent)] hover:bg-[color-mix(in_oklab,_var(--obsidian-color-accent),_transparent_10%)]',
            'filled'  => 'bg-[var(--obsidian-color-800)]/5 hover:bg-[var(--obsidian-color-800)]/10 dark:bg-[var(--obsidian-color-white)]/10 dark:hover:bg-[var(--obsidian-color-white)]/20',
            'ghost'   => 'bg-transparent hover:bg-[var(--obsidian-color-800)]/5 dark:hover:bg-[var(--obsidian-color-white)]/15',
            'outline' => 'bg-transparent',
            'danger'  => 'bg-[var(--obsidian-color-danger)] hover:bg-[var(--obsidian-color-danger-hover)]',
            'info'    => 'bg-[var(--obsidian-color-info)] hover:bg-[var(--obsidian-color-info-hover)]',
            'success' => 'bg-[var(--obsidian-color-success)] hover:bg-[var(--obsidian-color-success-hover)]',
            'warning' => 'bg-[var(--obsidian-color-warning)] hover:bg-[var(--obsidian-color-warning-hover)]',
            default   => 'bg-white hover:bg-[var(--obsidian-color-50)] dark:bg-[var(--obsidian-color-700)] dark:hover:bg-[var(--obsidian-color-600)]/75',
        })

        ->add(match ($variant) // BORDER
        {
            'primary' => 'border-[var(--obsidian-color-accent)]',
            'filled'  => 'border-[var(--obsidian-color-800)]/5 hover:border-[var(--obsidian-color-800)]/10 dark:border-[var(--obsidian-color-white)]/10 dark:hover:border-[var(--obsidian-color-white)]/20',
            'ghost'   => 'border-transparent hover:border-[var(--obsidian-color-800)]/5 dark:hover:border-[var(--obsidian-color-white)]/15 shadow-none',            'danger'  => 'border-[var(--obsidian-color-danger)] hover:border-[var(--obsidian-color-danger-hover)]',
            'outline' => 'border-[var(--obsidian-color-800)] dark:border-[var(--obsidian-color-white)]/90',
            'info'    => 'border-[var(--obsidian-color-info)] hover:border-[var(--obsidian-color-info-hover)]',
            'success' => 'border-[var(--obsidian-color-success)] hover:border-[var(--obsidian-color-success-hover)]',
            'warning' => 'border-[var(--obsidian-color-warning)] hover:border-[var(--obsidian-color-warning-hover)]',
            default   => 'border-[var(--obsidian-color-200)] hover:border-[var(--obsidian-color-200)] dark:border-[var(--obsidian-color-600)] dark:hover:border-[var(--obsidian-color-600)]',
        });

@endphp

{{-- output --}}

<button {{ $attributes->class($classes) }}>{{ $slot }}</button>