@use('Emkcloud\ObsidianUI\Enums\DocsBoxHeight')

{{-- setting --}}

@props(['height' => DocsBoxHeight::defaultValue()])

{{-- classes --}}

@php $table = ObsidianUI::table($slot); @endphp

{{-- output --}}

<x-obsidian::docs.box :height="$height">

    <div {{ $attributes }} data-obsidian-ui-docs-table>

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

</x-obsidian::docs.box>