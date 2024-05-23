<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        // return view('student.index')->with('students',$students);
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('students.create'));
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

    // return redirect()->route('students.index')->with('success', 'Successfully Created!');

    // $input =$request->all();
        Student::create($input);
        return redirect('students')->with('flash_message','Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
       $students = Student::find($id);
       return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        $students = Student::find($id);
        $input = $request->all();
         $students->update($input);
        return redirect('students')->with('flash message','student updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Student::findOrFail($id);
        $user->delete();

        return redirect()->route('students.index')->with('success', 'Successfully Deleted');
    }
}
