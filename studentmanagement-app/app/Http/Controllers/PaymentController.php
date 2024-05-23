<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Payment;

use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment::all();

        return view('payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message','Payment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):  View
    {
        $payments = Payment::find($id);
        return view('payments.show', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.edit',compact('payments','enrollments'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments = Payment::find($id);
            $input = $request->all();
            // var_dump($input);die;
            $payments->update($input);
            return redirect('payments')->with('flash message','Payment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Payment::findOrFail($id);
        $user->delete();

        return redirect()->route('payments.index')->with('success', 'Successfully Deleted');
    }
}
