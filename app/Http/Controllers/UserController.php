<?php

namespace App\Http\Controllers;

use Sentinel;
use View;

class UserController extends Controller
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
     * check if view exists, then show it or throw error
     *
     * @param [type] $name
     *
     * @return void
     */
    public function showView($name = null)
    {
    	if(View::exists($name))
		{
            return view($name);
		}
		else
		{
			return view('404');
		}
    }
}
