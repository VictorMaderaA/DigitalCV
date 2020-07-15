<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $template->name }}</p>
</div>

<!-- Foldername Field -->
<div class="form-group">
    {!! Form::label('folderName', 'Foldername:') !!}
    <p>{{ $template->folderName }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $template->image }}</p>
</div>

<!-- Previewimage Field -->
<div class="form-group">
    {!! Form::label('previewImage', 'Previewimage:') !!}
    <p>{{ $template->previewImage }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $template->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $template->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $template->updated_at }}</p>
</div>

