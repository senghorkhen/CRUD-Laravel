@extends('layout.app')

{{-- @section oy vea skal yield --}}
@section('content')
    <div class="container">
        {!! session('message') !!}
       
        {{-- <div class="text-center">
            <h1>Index Page</h1>
        </div> --}}
        <table class="table table-bordered">
            <br>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Province</th>
                <th>More Info</th>
            </tr>

            {{-- $students is the key. $item is the variable that we want to put --}}
            @foreach ($students as $item) 
            <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->province}}</td>
            <td><a href="/student/{{$item->id}}">Show</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection