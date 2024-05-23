<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use Illuminate\View\View;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $courses = Course::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view (('courses.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // $input = $request->validate([
        //     'name' => ['required'],
        //     'address' => ['required'],
        //     // 'password' => ['required', 'min:5', 'max:15'],
        //     'mobile' => ['required', 'min:8', 'max:15']
        // ],
        // [
        //     'name.required' => 'နာမည်ဖြည့်သွင်းရန်လိုအပ်ပါသည်။',
        //     // 'mobile.min' => 'At least 9',
        //     // 'mobile.max' => 'Out of',

        // ]
        // );
        Course::create($input);
        return redirect('courses')->with('flash_message','Course Added!');
            // $courses = Teacher::find($id);
            // $input = $request->all();
            // // $courses->update($input);
            // Course::create($input);
            // return redirect('courses')->with('flash message','Courses added!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $courses = Course::find($id);
       return view('courses.show', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $input = $request->validate([
        //     'name' => ['required'],
        //     'address' => ['required'],
        //     // 'password' => ['required', 'min:5', 'max:15'],
        //     'mobile' => ['required', 'min:8', 'max:15']
        // ],
        // [
        //     'name.required' => 'နာမည်ဖြည့်သွင်းရန်လိုအပ်ပါသည်။',
        //     // 'mobile.min' => 'At least 9',
        //     // 'mobile.max' => 'Out of',

        // ]
        // );
            $courses = Course::find($id);
            $input = $request->all();
            $courses->update($input);
            return redirect('courses')->with('flash message','course updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Course::findOrFail($id);
        $user->delete();

        return redirect()->route('courses.index')->with('success', 'Successfully Deleted');
    }
}
