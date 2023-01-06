<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //

    public function schoolList()
    {
        $schools = School::latest()->get();
        return view('school.list', compact('schools'));
    }

    public function schoolCreate()
    {
        return view('school.add');
    }

    public function schoolStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:191',
            'email' => 'email',
            'logo' => 'image'
        ]);

        $school = new School();

        if ($request->hasFile('logo')) {
            $filename = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $target = 'uploads/logo/' . $filename;
            $request->file('logo')->move('uploads/logo', $filename);
            $school->logo = $target;
        }

        $school->name = $request->name;
        $school->email = $request->email;
        $school->website = $request->website;
        if ($school->save()) {
            session()->flash('success', 'School added successfully');
            return redirect('school');
        }
    }


    public function schoolEdit($id)
    {
        $school = School::find($id);
        return view('school.add', compact('school'));
    }

    public function schoolUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:191',
            'email' => 'email',
            'logo' => 'nullable|image'
        ]);

        $school = School::find($id);

        if ($request->hasFile('logo')) {
            $filename = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $target = 'uploads/logo/' . $filename;
            $request->file('logo')->move('uploads/logo', $filename);
            $school->logo = $target;
        }

        $school->name = $request->name;
        $school->email = $request->email;
        $school->website = $request->website;
        if ($school->save()) {
            session()->flash('success', 'School updated successfully');
            return redirect('school');
        }
    }

    public function schoolView($id)
    {
        $school = School::find($id);
        return view('school.view', compact('school'));
    }

    public function schoolDelete($id)
    {
        $school = School::find($id);
        if ($school->delete()) {
            return redirect('school');
        }
    }
}
