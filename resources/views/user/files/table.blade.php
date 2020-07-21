<div class="table-responsive">
    <table class="table" id="files-table">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-center">Url publica (utilizala en las plantillas)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
            <tr>
                <td>{{ $file->name }}</td>
                <td class="text-center">
                    <p id="file-link-{{$file->id}}">{{ $file->getPublicLink() }}</p>
                    <button type="button" class="btn btn-primary" onclick="copyToClipboard('#file-link-{{$file->id}}')">
                        Copiar url
                    </button>
                </td>
                <td>
                    <a href="{{ $file->getPublicLink() }}" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                        Abrir url
                    </a>
                </td>
                <td>
                    {!! Form::open(['route' => ['files.destroy', $file->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Está Seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert('La Url fue copiada');
    }

</script>
@endpush
