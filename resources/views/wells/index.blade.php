

@extends('app')



@section('content')
    <h1>All Wells</h1>
    @foreach($wells as $well)
        <article>
            <h2><a href="{{action('WellsController@show', [$well->id])}}">{{$well->uwi}}, {{$well->state}}</a></h2>
            <div class="body">
                {{$well->description}}
            </div>
        </article>
    @endforeach
@stop


@stop

