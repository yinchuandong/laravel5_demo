<?php namespace App\Http\Controllers;

use App\Models\Page;

class HomeController extends Controller {

	public function index()
	{
		return view('home')->withPages(Page::all());
	}

}
