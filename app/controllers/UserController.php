<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(User::get());
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		User::create(array(
			'email' => Input::get('email'),
			'first_name' => Input::get('first_name')
			'last_name' => Input::get('last_name'),
			'type' => Input::get('type'),
			'password' => Input::get('password')
		));

		return Response::json(array('success' => true));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Response::json(array('success' => true));
	}


}
