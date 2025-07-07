{{-- setting --}}

@props(['variant' => 'default'])

{{-- output --}}

@php 

    $classes = ObsidianUI::classes()

        ->add('relative px-4 py-3 cursor-pointer')
        ->add('text-sm font-medium leading-none whitespace-nowrap')
        ->add('inline-flex items-center justify-center')
        ->add('border rounded-lg shadow-xs')
        ->add('disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none')

        ->add(match ($variant)
        {
            'primary' => 'text-[var(--obsidian-color-accent-foreground)]',
            'filled'  => '',
            'ghost'   => '',
            'danger'  => 'text-white',
            'info'    => 'text-white',
            'success' => 'text-white',
            'warning' => 'text-white',
            default   => 'text-[var(--obsidian-color-800)] dark:text-white',
        })

        ->add(match ($variant)
        {
            'primary' => 'bg-[var(--obsidian-color-accent)] hover:bg-[color-mix(in_oklab,_var(--obsidian-color-accent),_transparent_10%)]',
            'filled'  => '',
            'ghost'   => '',
            'danger'  => 'bg-[var(--obsidian-color-danger)] hover:bg-[var(--obsidian-color-danger-hover)]',
            'info'    => 'bg-[var(--obsidian-color-info)] hover:bg-[var(--obsidian-color-info-hover)]',
            'success' => 'bg-[var(--obsidian-color-success)] hover:bg-[var(--obsidian-color-success-hover)]',
            'warning' => 'bg-[var(--obsidian-color-warning)] hover:bg-[var(--obsidian-color-warning-hover)]',
            default   => 'bg-white hover:bg-[var(--obsidian-color-50)] dark:bg-[var(--obsidian-color-700)] dark:hover:bg-[var(--obsidian-color-600)]/75',
        })

        ->add(match ($variant)
        {
            'primary' => 'border-[var(--obsidian-color-accent)]',
            'filled'  => '',
            'ghost'   => '',
            'danger'  => 'border-[var(--obsidian-color-danger)] hover:border-[var(--obsidian-color-danger-hover)]',
            'info'    => 'border-[var(--obsidian-color-info)] hover:border-[var(--obsidian-color-info-hover)]',
            'success' => 'border-[var(--obsidian-color-success)] hover:border-[var(--obsidian-color-success-hover)]',
            'warning' => 'border-[var(--obsidian-color-warning)] hover:border-[var(--obsidian-color-warning-hover)]',
            default   => 'border-[var(--obsidian-color-200)] hover:border-[var(--obsidian-color-200)] dark:border-[var(--obsidian-color-600)] dark:hover:border-[var(--obsidian-color-600)]',
        });

// primary Colore principale del brand (più importante)
// secondary Supporta il primary, usato per elementi meno importanti
// accent Colore vivace, d’accento, per piccoli dettagli visivi
// neutral Grigi e tinte neutre per sfondi, bordi, testi secondari
// success Verde, per esiti positivi
// warning Giallo/arancio, per avvisi
// danger Rosso, per errori e azioni rischiose
// info Blu chiaro o azzurro, per messaggi informativi

    //text-color
    //text-color:hover
    //border-color
    //border-color:hover
    //background-color
    //background-color:hover

// primary Colore principale del brand (più importante)
// secondary Supporta il primary, usato per elementi meno importanti
// accent Colore vivace, d’accento, per piccoli dettagli visivi
// neutral Grigi e tinte neutre per sfondi, bordi, testi secondari
// success Verde, per esiti positivi
// warning Giallo/arancio, per avvisi
// danger Rosso, per errori e azioni rischiose
// info Blu chiaro o azzurro, per messaggi informativi

//:root {
//  --color-bg: #ffffff;
//  --color-text: #111111;
//  --color-surface-bg: #f5f5f5;
//  --color-surface-text: #111111;
//}

//.dark {
//  --color-bg: #111111;
//  --color-text: #f5f5f5;
//  --color-surface-bg: #1f1f1f;
//  --color-surface-text: #f5f5f5;
//}

@endphp

<button {{ $attributes->class($classes) }}>
{{ $slot }}
</button>
