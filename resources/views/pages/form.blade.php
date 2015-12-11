<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender', 'Gender') !!}
    {!! Form::select('gender', ['Male'=>'Male', 'Female'=>'Female'], $gender,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($mode, ['class' => 'btn btn-info']) !!}
</div>

@if ($errors->any())
    <ul class="alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
