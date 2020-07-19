<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    <input type="file" name="file" />
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('files.index') }}" class="btn btn-default">Cancel</a>
</div>
