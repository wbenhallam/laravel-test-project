

<div class="form-group">
    {!! Form::label('uwi', 'Unique Well Identifier:') !!}
    {!! Form::text('uwi',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('MD', 'Measured Depth :') !!}
    {!! Form::input('number', 'MD', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Well Information/Description:') !!}
    {!! Form::textarea('description',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>