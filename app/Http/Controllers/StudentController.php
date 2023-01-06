<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function studentList()
    {
        $students = Student::latest()->get();
        return view('student.list', compact('students'));
    }

    public function studentCreate()
    {
        $schools = School::get();
        return view('student.add',compact('schools'));
    }


    public function studentStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:2|max:191',
            'last_name' => 'nullable|min:2|max:191',
            'email' => 'email',
            'school' => 'required',
            'phone_number' =>'numeric'
        ]);

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->school_id = $request->school;
        $student->phone_number = $request->phone_number;
        if ($student->save()) {
            session()->flash('success', 'Student added successfully');
            return redirect('student');
        }
    }


    public function studentEdit($id)
    {
        $schools = School::get();
        $student = Student::find($id);
        return view('student.add', compact('schools','student'));
    }

    public function studentUpdate(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|min:2|max:191',
            'last_name' => 'nullable|min:2|max:191',
            'email' => 'email',
            'school' => 'required',
            'phone_number' =>'numeric'
        ]);

        $student = Student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->school_id = $request->school;
        $student->phone_number = $request->phone_number;
        if ($student->save()) {
            session()->flash('success', 'Student updated successfully');
            return redirect('student');
        }
    }


    public function studentView($id)
    {
        $student = Student::find($id);
        return view('student.view', compact('student'));
    }

    public function studentDelete($id)
    {
        $student = Student::find($id);
        if ($student->delete()) {
            return redirect('student');
        }
    }




}
