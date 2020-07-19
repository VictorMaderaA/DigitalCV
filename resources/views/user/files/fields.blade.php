<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    <input type="file" name="file" />
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Subir Archivo', ['class' => 'btn btn-primary']) !!}
</div>
