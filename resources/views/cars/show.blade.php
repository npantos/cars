@extends('layouts.master')

@section('title')
    Single Car
@endsection

@section('content')
    <h1>{{$car->title}}</h1>
    <p>{{$car->producer}}</p>
@endsection



