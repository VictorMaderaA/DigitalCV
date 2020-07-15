<!-- Template Id Field -->
<div class="form-group">
    {!! Form::label('template_id', 'Template Id:') !!}
    <p>{{ $templateViewHistory->template_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $templateViewHistory->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $templateViewHistory->updated_at }}</p>
</div>

