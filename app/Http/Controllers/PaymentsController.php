<?php

namespace App\Http\Controllers;

use App\Payments;
use Illuminate\Http\Request;

use Session;

class PaymentsController extends Controller
{
	function __construct()
	{
	    $this->middleware('auth');
	}
	
	public function index()
	{
	    //
	}
	
	public function create()
	{
	    //
	}
	
	public function store(Request $request)
	{
	    //
	}
	
	public function show(Payments $payments)
	{
	    //
	}
	
	public function edit(Payments $payments)
	{
	    //
	}
	
	public function update(Request $request, Payments $payments)
	{
	    //
	}
	
	public function destroy(Payments $payments)
	{
        $si = Payments::find($payments->id);
        // delete related model
        $si->delete();

        // info when update success
        Session::flash('flash_message', 'Data successfully deleted!');
    
        return redirect()->back();      // redirect back to original route
	}
}
