<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view (('enrollments.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','enrollment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show', compact('enrollments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit', compact('enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments = Enrollment::find($id);
            $input = $request->all();
            $enrollments->update($input);
            return redirect('enrollments')->with('flash message','enrollment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Enrollment::findOrFail($id);
        $user->delete();

        return redirect()->route('enrollments.index')->with('success', 'Successfully Deleted');
    }
}
