<?php

namespace apiqroo\apitable;
 
use App\Http\Controllers\Controller;
 
class ApiTableController extends Controller
{
 
    public function index()
	{
		$saludo = "mi data table";
		return view('apitable::index', compact('saludo'));
        //echo Carbon::now($timezone)->toDateTimeString();

    }
 
}
 