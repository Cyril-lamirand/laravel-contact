<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public  function __construct()
	{
		$this->middleware('auth');
	}
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$contacts = Contact::where('user_id', $this->user_id=auth()->user()->id)->get();        
        return view('contacts\index', ['contacts' => $contacts]);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create(Request $request)
	{
		$newcontact = request()->validate([
			'name' => 'required|max:128',
			'tel' => 'required|max:128',
			'email' => 'required|email|max:128'
		]);

		$contact = new Contact($newcontact);
		$contact->user_id=auth()->user()->id;

		$contact->save();

		return redirect('/create')->with('success');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Contact  $contact
	* @return \Illuminate\Http\Response
	*/
	public function show(Contact $contact)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Contact  $contact
	* @return \Illuminate\Http\Response
	*/
	public function edit(Contact $contact)
	{

		// TO DO
		$contact->save();

		return redirect('/contacts')->with('success');
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Contact  $contact
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Contact $contact)
	{

	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Contact  $contact
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Contact $contact)
	{
		// To DO
	}
}
