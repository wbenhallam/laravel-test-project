

@extends('app')



@section('content')
    <h2>{{$well->uwi}}, {{$well->state}}</h2>
    <div class="body">
        {{$well->description}}
    </div>
@stop


@stop

