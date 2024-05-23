<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Response;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batch::all();
        return view('batches.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $courses =Course::pluck('name', 'id');
        return view('batches.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message','Batches Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.show', compact('batches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.edit', compact('batches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batches = Batch::find($id);
            $input = $request->all();
            // var_dump($input);die;
            $batches->update($input);
            return redirect('batches')->with('flash message','batch updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Batch::findOrFail($id);
        $user->delete();

        return redirect()->route('batches.index')->with('success', 'Successfully Deleted');
    }
}
