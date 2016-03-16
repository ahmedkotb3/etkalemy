<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function validate_inputs($inputs){
		$validator = Validator::make(
				$inputs,
				[
						'arabic_name' => "required",
						'email' => "required|unique:users|email",
						'password' => "required"
				]
		);


		if($validator->fails()){

			return "false";

		}else{

			return "true";
		}
	}

	public function store()
	{
		$inputs = Input::all();
		$password = Input::get('password');
		$re_password = Input::get('re_password');
		$encrypt_password =Hash::make(Input::get('password'));

		if($this->validate_inputs($inputs)){
			if($password === $re_password){
				User::save_user(Input::get('arabic_name'),Input::get('english_name'),Input::get('email'),$encrypt_password,"",Input::get('country'),Input::get('work'),
						Input::get('date'),"user",Input::get('_token'));
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function create_login(){
		return view('login');
	}



	public function login(){

		 $email = Input::get('email');
		 $password = Input::get('password');

		  $user = User::where('email','=',$email)->get()->first();
		if($user->role == "admin"){
			if (Auth::attempt(array('email' =>$email, 'password' => $password))) {
				return redirect('/slider');
			}else{
				return view('login');
			}

		}else{
			if (Auth::attempt(array('email' =>$email, 'password' => $password))) {
				return redirect('/portfile');
			}else{
				return view('login');
			}

		}

	}
	public function portfile(){

		return view('portfile');
	}


}
