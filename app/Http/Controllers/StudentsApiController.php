<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsApiController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'course' => 'required',
        ]);

        return Student::create([
            'name' => request('name'),
            'course' => request('course'),
        ]);
    }

    public function update(Student $student)
    {
        request()->validate([
            'name' => 'required',
            'course' => 'required',
        ]);

        $sucess = $student->update([
            'name' => request('name'),
            'course' => request('course'),
        ]);

        return [
            'sucess' => $sucess
        ];
    }

    public function destroy(Student $student)
    {
        $sucess = $student->delete();

        return [
            'sucess' => $sucess
        ];
    }
}
