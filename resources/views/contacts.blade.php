@extends('layouts.app')

@section('content')

    <h1>Contacts Page {{$name}}</h1>

    <div>
        @if (count($people))

            <ul>
                @foreach($people as $person)

                    <li>{{$person}}</li>
                @endforeach
            </ul>

        @endif
    </div>

@stop


@section('footer')

    <h1>Your footer is here</h1>

@stop