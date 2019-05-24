@extends('layouts.master')

@section('title', $car->title)

@section('content')

<h1>
    {{$car->producer}}
</h1>
<p>Model : {{$car->title}}</p>
<p>Number of doors : {{$car->number_of_doors}}</p>

@endsection