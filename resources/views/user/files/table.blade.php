<div class="table-responsive">
    <table class="table" id="files-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Url para utilizar</th>
                <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
            <tr>
                <td>{{ $file->name }}</td>
                <td>{{ $file->getPublicLink() }}</td>
                <td>{{ $file->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['files.destroy', $file->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('my.files.show', [$file->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
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
