{{-- classes --}}

@php $classes = ObsidianUI::classes()
    ->add('[:where(&)]:w-full')
    ->add('[:where(&)]:h-full')
    ->add('[:where(&)]:max-h-[inherit]')
    ->add('[:where(&)]:relative')
    ->add('[:where(&)]:overflow-auto');
@endphp

{{-- setting --}}

@php $table = ObsidianUI::table($slot); @endphp

{{-- output --}}

<div {{ $attributes->class($classes) }} data-obsidian-ui-docs-table>

    <table>

        @if (count($table->getTableHead()) > 0)
            <tr>
                @foreach ($table->getTableHead() as $head)
                    <th>{!! $head !!}</th>
                @endforeach
            </tr>
        @endif

        @if (count($table->getTableBody()) > 0)
            @foreach ($table->getTableBody() as $columns)
                <tr>
                    @foreach ($columns as $col)
                        <td>{!! $col !!}</td>
                    @endforeach
                </tr>
            @endforeach
        @endif

    </table>

</div>