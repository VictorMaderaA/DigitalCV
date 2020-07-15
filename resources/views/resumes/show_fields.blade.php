<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $resume->user_id }}</p>
</div>

<!-- Template Id Field -->
<div class="form-group">
    {!! Form::label('template_id', 'Template Id:') !!}
    <p>{{ $resume->template_id }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $resume->content }}</p>
</div>

<!-- Main Field -->
<div class="form-group">
    {!! Form::label('main', 'Main:') !!}
    <p>{{ $resume->main }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $resume->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $resume->updated_at }}</p>
</div>

