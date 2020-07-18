<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Main Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main', 'Principal:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('main', 0) !!}
        {!! Form::checkbox('main', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('my.resumes') }}" class="btn btn-default">Cancel</a>
</div>
