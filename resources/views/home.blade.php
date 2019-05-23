@extends('layouts/app')

@section('content')
       
@if($themes)

    @foreach($themes as $theme)

        {{ $theme['name'] }}

    @endforeach
    @else

        <p>No Themes found</p>

    @endif

@endsection