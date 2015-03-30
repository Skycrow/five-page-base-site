<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Shows home page to user.
	 * 
	 * @return Response
	 */
	public function home()
	{
	return view('pages.home');
	}

	/**
	 * Shows about page to user.
	 * 
	 * @return Response
	 */
	public function about()
	{
		return view ('pages.about');
	}

	/**
	 * Shows activity page to user. // temporary changes with each theme
	 * 
	 * @return Response
	 */
	public function activity()
	{
		return view('pages.activity');
	}

	/**
	 * Shows gallery page to user.
	 * 
	 * @return Response
	 */
	public function gallery()
	{
		return view('pages.gallery');
	}

	/**
	 * Shows contact page to user.
	 * 
	 * @return Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}
}
