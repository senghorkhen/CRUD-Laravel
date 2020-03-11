@extends('layout.app')

{{-- oy vea skal yield --}}
@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Welcome to PNC School</h1>
            <a href="/student" class="btn btn-primary">List Student</a>
            <a href="/student/create" class="btn btn-warning">Add Student</a>
        </div>
    </div>
@endsection