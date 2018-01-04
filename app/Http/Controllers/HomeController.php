<?php

namespace App\Http\Controllers;

use App\Model\LandList;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Flight;

use App\Http\Controllers\Controller;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
	    $user = Auth::id();

	    //dd(\Auth::user());

	    if ($user=='4') {
		    return view( 'landlist' );
	    }
	    else
	    {
		    return view( 'house_list' );
	    }
    }
	public function home()
	{
		return view('home');
	}
	public function store(Request $request) {
		$landlist = new LandList();
		$landlist->name = $request->name;
		$landlist->discription = $request->discription;
		$landlist->save();

		return view( 'landlist' );
	}


}
