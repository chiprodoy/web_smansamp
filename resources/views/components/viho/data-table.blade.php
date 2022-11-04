<div class="table-responsive">
    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>

                @foreach ($column as $col)
                    <th scope="col">{{$col['title']}}</th>
                @endforeach
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    <td scope="row"><input type="checkbox" class="datachecked" value="{{ $item->id}}"/></td>
                    @foreach ($column as $col)
                        <td >{{ substr(strip_tags($item->{$col['field']}),0,200) }}</td>
                    @endforeach
                        <td>
                            @can('update', $item)
                                @if (strpos($editButton,'http')===0)
                                    <x-viho::link-button class="btn-warning btn-xs" href='{{ $editButton}}'><i data-feather="pencil"></i>Edit</x-viho::link-button> <br/>
                                @else
                                    <x-viho::link-button class="btn-warning btn-xs" href='{{ route($editButton,$item->id) }}'><i data-feather="pencil"></i>Edit</x-viho::link-button> <br/>
                                @endif
                            @endcan
                            @can('delete', $item)
                                @if (strpos($deleteButton,'http')===0)
                                    <x-viho::button class="btn-danger btn-xs" onclick="destroy('{{ $deleteButton}}')"><i data-feather="trash-2"></i>Delete</x-viho::button>
                                @else
                                    <x-viho::button class="btn-danger btn-xs" onclick="destroy('{{ route($deleteButton,$item->id) }}')"><i data-feather="trash-2"></i>Delete</x-viho::button> <br/>
                                @endif
                            @endcan

                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$record->links()}}
Menampilkan {{$record->firstItem()}} dari {{ $record->total() }}
</div>
