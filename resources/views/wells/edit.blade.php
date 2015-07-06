@extends('app')

@section('content')

    <h1>Edit well: {{$well->uwi}}, {{$well->state}}</h1>
    <hr/>

    {!! Form::model($well, ['method' => 'PATCH', 'action' => ['WellsController@update', $well->id]]) !!}
        @include('wells.partials', ['submitButtonText' => 'Update Well'])
    {!! Form::close() !!}

    @include('errors.list')
@stop