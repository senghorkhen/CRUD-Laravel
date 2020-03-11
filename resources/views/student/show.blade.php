@extends('layout.app')

{{-- oy vea skal yield --}}
@section('content')
    <div class="container">
        {{-- <div class="text-center">
            <h1>Show Page - {{$id}}</h1>
        </div> --}}
        <div class="card">
            <div class="card-header">
               {{$student->name}}
            </div>
            <div class="card-body">
               {{$student->age}} - {{$student->province}}   
            </div>
            <div class="card-footer">
                <form action="/student/{{$student->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection