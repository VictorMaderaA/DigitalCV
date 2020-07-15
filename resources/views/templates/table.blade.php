<div class="table-responsive">
    <table class="table" id="templates-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Foldername</th>
        <th>Image</th>
        <th>Previewimage</th>
        <th>Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($templates as $template)
            <tr>
                <td>{{ $template->name }}</td>
            <td>{{ $template->folderName }}</td>
            <td>{{ $template->image }}</td>
            <td>{{ $template->previewImage }}</td>
            <td>{{ $template->active }}</td>
                <td>
                    {!! Form::open(['route' => ['templates.destroy', $template->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('templates.show', [$template->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('templates.edit', [$template->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
