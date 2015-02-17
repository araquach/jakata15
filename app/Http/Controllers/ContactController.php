<?php namespace App\Http\Controllers;
	  use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Cintact Controller
	|--------------------------------------------------------------------------
	|
	| This page renders the main pages of the site
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contact.contact');
	}
	
	public function store(ContactFormRequest $request)
	{
		return \Redirect::route('contact')
		      ->with('message', 'Thanks for contacting us!');
	}
}
