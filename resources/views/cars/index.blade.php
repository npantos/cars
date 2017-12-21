@extends('layouts.master')

@section('title')
    All Cars
@endsection

@section('content')
    <h1>List of all cars</h1>
    <table class="table table-hover">
        <thead>
        <tr class="table-success">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Producer</th>
            <th scope="col">Number of doors</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($cars as $car)
            <tr class="table-active">
                <th scope="row">{{$car->id}}</th>
                <td><a href="{{ route('car',['id'=>$car->id]) }}">{{$car->title}}</a></td>
                <td>{{$car->producer}}</td>
                <td>{{$car->number_of_doors}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection



