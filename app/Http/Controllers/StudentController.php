<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;


class StudentController extends Controller
{
    public function index() {
        //select * from table
        $student = Students::all();

        // dd($student); // They like for test data in laravel
        return view('student.index', ['students' => $student]);
    }

    public function show($id) {

        // select * from where id
        $student = Students::findOrFail($id); //findOrFail vea return 404 if it doesn't see
        return view('student.show', ['student'=> $student]);
    }

    public function create() {
        return view('student.create');
    }

    public function store() {
        $student = new Students();
        $student->name = request('name');
        $student->age = request('age');
        $student->province = request('province');
        $student->save();
        error_log($student);

        // redirect tv kan get method
        return redirect('/student');
    }

    public function destroy($id) {
         // route it run into table
        $student = Students::findOrFail($id);
        $student->delete();
        return redirect('student')->with('message', ' <div class="alert alert-success">Delete successfully!!</div>');
    }
}
