<!-- Main Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main', 'Principal:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('main', 0) !!}
        {!! Form::checkbox('main', '1', null) !!}
    </label>
</div>

<div class="clearfix"></div>

<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' =>
'Copy Everything thats inside the following div tags
Copiar contenido que se encuentra dentro de las etiquetas siguientes

<div id="copy-me-cv">
    Contenido/Modificaciones
</div>']) !!}
</div>

<div class="clearfix"></div>

<a class="btn btn-primary" href="{{route('my.resumes.download', $resume->id)}}" style="margin: 20px" role="button">
    Descargar Plantilla Editable
</a>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('my.resumes') }}" class="btn btn-default">Cancelar</a>
</div>
