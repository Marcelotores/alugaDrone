<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Drone;
//use App\Auth;

class UserController extends Controller
{

	//Retorna todos os usuários cadastrados no sistema
    public function getAll() {
    	return User::all();
    }

    //Retorna todos os usuários que ja alugaram determinado drone de id = $id
    public function getAllByDrone($id) {
    	return Drone::find($id)->users;
    }

    //Retorna o usuário de id = $id
    public function getById($id) {
    	return User::find($id);
    }


    public function doLogin(Request $request){
		if (Auth::attempt(
			['email' => $request->email,
			 'password' => $request->password])) {
			return Auth::user();
		} else {
			throw new \Exception("Não foi possível realizar o login. Tente novamente.");
		}
	}


	public function doLogout(){
	 	Auth::logout();
	 	return Auth::user(); //tem q ser nulo
	}

	public function checkLogin(){
	 	return Auth::user();
	}


	public function createLogin(Request $request){
		$theUser = User::where('email','=', $request->email)->first();
		if ($theUser) throw new \Exception("Este email já está cadastrado");

		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();

		Auth::login($user);
		return Auth::user();
	}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $user = User::find($id);
      $user->delete();
  }


}
