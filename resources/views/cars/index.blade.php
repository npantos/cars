@extends('layouts.master')

@section('title')
    All Cars
@endsection

@section('content')
    @foreach ($cars as $car)
        <li><a href="{{ route('car',['id'=>$car->id]) }}">{{$car->title}}</a></li>
    @endforeach
@endsection



