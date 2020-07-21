<div class="container">
    <div class="row">
        <div class="col-md-12">

            @foreach($resumes as $resume)
            @php
            $template = $resume->template()->first();
            @endphp

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    @if ($resume->main)
                    <h4 class="text-center"><span class="label label-info">Principal</span></h4>
                    @endif
                    <img src="{{ $template->getPreview() }}" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3>{{ $template->name }}</h3>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-auto">
                                <div class='btn-group'>
                                    <a href="{{ route('resumes.preview', [$resume->id]) }}" target="_blank"
                                        class='btn btn-default'>Previsualizar</a>
                                    <a href="{{ route('my.resumes.edit', [$resume->id]) }}"
                                        class='btn btn-primary'>Modificar</a>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-auto">
                            <p id="my-resume-{{ $resume->id }}" hidden>{{route('resumes.preview', [$resume->id])}}</p>
                                <button class="btn btn-default" onclick="copyToClipboard('#my-resume-{{ $resume->id }}')">
                                    Copiar Url Compartir
                                </button>
                            </div>
                        </div>

                        <br>

                        <div class="row text-center">
                            {!! Form::open(['route' => ['my.resumes.destroy', $resume->id], 'method' => 'delete']) !!}
                            <div class="col-auto">
                                <div class='btn-group'>

                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit',
                                    'class' =>
                                    'btn btn-danger btn', 'onclick' => "return confirm('Está Seguro?')"]) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
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
