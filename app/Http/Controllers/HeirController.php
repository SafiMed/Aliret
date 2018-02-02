<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heir;

class HeirController extends Controller
{
	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	/**
	 * Display a listing of the resource.
	 * 
	 * @return Illuminate\Http\Response
	 */
    public function index()
    {
    	$heirs = Heir::all();
    	return view('heirs.index')->with('heirs', $heirs);
    }
}
