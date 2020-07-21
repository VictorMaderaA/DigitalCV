<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Foldername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('folderName', 'Foldername:') !!}
    {!! Form::text('folderName', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Previewimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previewImage', 'Previewimage:') !!}
    {!! Form::file('previewImage') !!}
</div>
<div class="clearfix"></div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('templates.index') }}" class="btn btn-default">Cancelar</a>
</div>
