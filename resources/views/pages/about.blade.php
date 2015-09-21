@extends('app')

@section('content')

    <h1>About me </h1>

    <p>
       <ul>
        @foreach($people as $person)
        <li>{{ $person }}</li>
        @endforeach
       </ul>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque, distinctio doloremque ex laborum minus odit officiis possimus quae ullam? Accusantium architecto dolor ducimus id nesciunt qui quia rem sunt?
    </p>

@stop


@section('footer')
    This is footer
@stop