<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		$title = "Home";
		/*
		return view('home.index', compact('title'));*/
		/*$items = array(
			'items' => [
			'Pack luggage',
			'Go to airport',
			'Arrive in San Juan'
			]
			);

		dd($items);*/


		//\Log::info('informal message');
		/*$monolog = \Log::getMonolog();
		$items = ['Pack luggage', 'Go to airport', 'Arrive in San Juan'];
		$monolog->pushHandler(new \Monolog\Handler\FirePHPHandler());
		$monolog->addInfo('Log Message', array('items' => $items));
		\Debugbar::error('Something is definitely going wrong.');*/
		
		$datas = array('Shuvo', 'David', 'Liza');
		$lists = array(1);
		//return view('home.index')->with($lists);
		return view('home.index', compact('datas', 'title', 'lists'));

	}
}
