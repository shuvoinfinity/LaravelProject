<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\http\Requests\ContatFormRequest;

class AboutController extends Controller
{
    //
    public function create()
    {

    	return view('about.contact');
    }

    public function store(ContatFormRequest $request)
    {

    	return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
