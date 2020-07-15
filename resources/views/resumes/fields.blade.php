<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Template Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('template_id', 'Template Id:') !!}
    {!! Form::select('template_id', $templateItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Main Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main', 'Main:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('main', 0) !!}
        {!! Form::checkbox('main', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('resumes.index') }}" class="btn btn-default">Cancel</a>
</div>
