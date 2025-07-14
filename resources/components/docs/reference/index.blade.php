{{-- setting --}}

@php $rows = explode(PHP_EOL,$slot); @endphp

{{-- output --}}

<x-obsidian::docs.table>

    <table data-obsidian-ui-docs-reference>

        <tr><th>Property</th><th>Description</th><th>Default</th</tr>

        @foreach ($rows as $row)

            @php $cols = explode('|',$row); @endphp

            <tr>

            @foreach ($cols as $col)
                <td>{{ Str::trim($col) }}</td>
            @endforeach

            </tr>

        @endforeach

    </table>

</x-obsidian::docs.table>