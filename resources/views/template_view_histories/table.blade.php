<div class="table-responsive">
    <table class="table" id="templateViewHistories-table">
        <thead>
            <tr>
                <th>Template Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($templateViewHistories as $templateViewHistory)
            <tr>
                <td>{{ $templateViewHistory->template_id }}</td>
                <td>
                    {!! Form::open(['route' => ['templateViewHistories.destroy', $templateViewHistory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('templateViewHistories.show', [$templateViewHistory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('templateViewHistories.edit', [$templateViewHistory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
