<div class="container">
    <div class="row">
        <div class="col-md-12">

            @foreach($templates as $template)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ $template->getPreview() }}" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>{{ $template->name }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-primary btn-product"
                                    href="{{ route('templates.preview', [$template->id]) }}"
                                    target="_blank">Visualizar</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('my.resumes.copyTemplate', [$template->id]) }}"
                                    class="btn btn-success btn-product" style="width: 100%;">Copiar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</div>
