<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('index', compact('menu'));
	}
	public function about()
	{
		return view('about', [
			'nama' => 'Udin Samsudin',
		]);
	}
}
