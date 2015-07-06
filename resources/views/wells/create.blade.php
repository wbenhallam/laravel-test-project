@extends('app')

@section('content')

    <h1>Add a new well to database</h1>
    <hr/>

    {!! Form::open(['url' => 'wells']) !!}
        @include('wells.partials', ['submitButtonText' => 'Add Well'])

    {!! Form::close() !!}

    @include('errors.list')
@stop