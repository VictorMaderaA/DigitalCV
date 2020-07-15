<div class="table-responsive">
    <table class="table" id="resumes-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Template Id</th>
        <th>Content</th>
        <th>Main</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resumes as $resume)
            <tr>
                <td>{{ $resume->user_id }}</td>
            <td>{{ $resume->template_id }}</td>
            <td>{{ $resume->content }}</td>
            <td>{{ $resume->main }}</td>
                <td>
                    {!! Form::open(['route' => ['resumes.destroy', $resume->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('resumes.show', [$resume->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('resumes.edit', [$resume->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
