@extends('layout.app')

{{-- oy vea skal yield --}}
@section('content')
    <div class="container">
        {{-- @csrf protect hacker nv chnlos kandal --}}
       
        <form action="/student" method="POST">
          @csrf
            <div class="form-group">
              <label for="text">Username:</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label>Age:</label>
              <input type="number" class="form-control" name="age">
            </div>
            <div class="form-group">
                <label>Province:</label>
                <input type="text" class="form-control" name="province">
              </div>
            <button type="submit" class="btn btn-primary">Add New Student</button>
          </form>
    </div>
@endsection