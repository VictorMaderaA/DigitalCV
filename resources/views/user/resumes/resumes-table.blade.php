<div class="table-responsive">
    <table class="table" id="templates-table">
        <thead>
            <tr>
                <th></th>
                <th>Nombre Plantilla</th>
                <th>Folder Imagen</th>
                <th>Folder Previewimage</th>
                <th>Creado</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resumes as $resume)
            @php
                $data = $resume->template()->first();
            @endphp
            <tr>
                <td>{{ $resume->main? 'Default':'' }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->image }}</td>
                <td>{{ $data->previewImage }}</td>
                <td>{{ $resume->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['my.resumes.destroy', $resume->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('resumes.preview', [$resume->id]) }}" target="_blank"
                            class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('my.resumes.edit', [$resume->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
