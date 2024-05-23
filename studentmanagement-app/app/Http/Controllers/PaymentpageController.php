<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Paymentpage;

class PaymentpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentpages = Paymentpage::all();
        return view('paymentpages.index',compact('paymentpages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments =Enrollment::pluck('enroll_no', 'id');
        return view('paymentpages.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Paymentpage::create($input);
        return redirect('paymentpages')->with('flash_message','Paymentpage Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paymentpages = Paymentpage::find($id);
        return view('paymentpages.show', compact('paymentpages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $paymentpages = Paymentpage::find($id);
        // $enrollments = Enrollment::pluck('enroll_no','id');
        // return view('paymentpages.edit', compact('paymentpages','enrollments'));
        $paymentpages = Paymentpage::find($id);
        $enrollments = Enrollment::select('id', 'enroll_no')->get();
        return view('paymentpages.edit', [
            'paymentpages' => $paymentpages,
            'enrollments' => $enrollments
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymentpages = Paymentpage::find($id);
        $input = $request->all();
        // var_dump($input);die;
        $paymentpages->update($input);
        return redirect('paymentpages')->with('flash message','batch updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Paymentpage::findOrFail($id);
        $user->delete();

        return redirect()->route('paymentpages.index')->with('success', 'Successfully Deleted');
    }
}
