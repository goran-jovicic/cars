@extends('layouts.master')

@section('title', 'List of posts')    

@section('content')

<ul>
    @foreach ($cars as $car)
        <li>
            <a href="{{'/cars/' . $car->id}}">{{$car->title}}</a>
        </li>
    @endforeach
</ul>
@endsection