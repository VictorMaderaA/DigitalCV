<!-- Template Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('template_id', 'Template Id:') !!}
    {!! Form::select('template_id', $templateItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('templateViewHistories.index') }}" class="btn btn-default">Cancel</a>
</div>
