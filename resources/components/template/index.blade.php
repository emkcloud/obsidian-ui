{{-- output --}}

    <div class=" grid"

    style="    grid-template:
        'header header header'
        'sidebar main aside' 1fr
        'sidebar footer aside' / min-content minmax(0, 1fr) min-content;
    "
    >

    {{ $slot }}

    </div>