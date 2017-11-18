<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Drone;

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


}	
