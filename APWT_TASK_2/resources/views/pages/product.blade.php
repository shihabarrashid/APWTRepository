@extends('layouts.app')
@section('content')

<br> 

<table class="table table-striped table-hover" border="1">
        <tr>
            <th>Id</th>
            <th>Course ID</th>
            <th>Price</th>
        </tr>

        @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->price}}</td>
            </tr>
        @endforeach
</table>
    
@endsection