<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drone;
use App\User;
use App\AlugaDrone;

class AlugaDroneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function alugaDrone($drone_id, $user_id) {

        $drone = Drone::find($drone_id);

       // $user = User::find($user_id);

        echo "<b>O {$drone->name} foi alugado por :<b></br>";

       // echo $user->drone;

        $drone->users()->attach($user_id);

      //  $user->drones()->attach($drone_id);

    }

    public function getDronesAlugadosByUser($user_id) {
      $drones = AlugaDrone::where('user_id', $user_id)->get();
      return $drones;
    }


    public function index()
    {
        return AlugaDrone::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $alugaDrone = new AlugaDrone();

      $alugaDrone->drone_id  = $request->drone_id;
      $alugaDrone->user_id = $request->user_id;
      $alugaDrone->valor = $request->valor;
      $alugaDrone->data_inicio = $request->data_inicio;
      $alugaDrone->data_final = $request->data_final;

      $alugaDrone->save();

      return $alugaDrone;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return AlugaDrone::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($drone_id, $user_id)
    {
      $drone = AlugaDrone::where('drone_id', $drone_id)->where('user_id', $user_id)->get();
      return $drone;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($drone_id, $user_id)
    {
      $drone = AlugaDrone::where('drone_id', $drone_id)->where('user_id', $user_id);
      $drone->delete();
    }
}
