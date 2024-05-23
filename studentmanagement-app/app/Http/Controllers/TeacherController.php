<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        // return view('student.index')->with('teachers',$teachers);
        return view('teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('teachers.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
    //    $input = $request->all();
    $input = $request->validate([
        'name' => ['required'],
        'address' => ['required'],
        // 'password' => ['required', 'min:5', 'max:15'],
        'mobile' => ['required', 'min:8', 'max:15']
    ],
    [
        'name.required' => 'နာမည်ဖြည့်သွင်းရန်လိုအပ်ပါသည်။',
        // 'mobile.min' => 'At least 9',
        // 'mobile.max' => 'Out of',

    ]
    );
    // Student::create($input);

    // return redirect()->route('teachers.index')->with('success', 'Successfully Created!');

    // $input =$request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message','Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
       $teachers = Teacher::find($id);
       return view('teachers.show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { $input = $request->validate([
        'name' => ['required'],
        'address' => ['required'],
        // 'password' => ['required', 'min:5', 'max:15'],
        'mobile' => ['required', 'min:8', 'max:15']
    ],
    [
        'name.required' => 'နာမည်ဖြည့်သွင်းရန်လိုအပ်ပါသည်။',
        // 'mobile.min' => 'At least 9',
        // 'mobile.max' => 'Out of',

    ]
    );
        $teachers = Teacher::find($id);
        $input = $request->all();
         $teachers->update($input);
        return redirect('teachers')->with('flash message','student updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Teacher::findOrFail($id);
        $user->delete();

        return redirect()->route('teachers.index')->with('success', 'Successfully Deleted');
    }
}
