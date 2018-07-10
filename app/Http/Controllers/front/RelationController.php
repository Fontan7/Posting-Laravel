<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relation;
use App\User;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id = \Auth::user()->id;
      $users = user::paginate(3);
      $rels = [];
      $myUser = user::with(['relations'])->where('id', $id)->get();
      foreach ($myUser as $user){
        foreach ($user->relations as $rel) {
          $rels[$rel->user_id_2] = '1';
        };
      };
      return view ('front.relations.index', compact('users'))->with('rels', $rels);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $idUser = \Auth::user()->id;
      $relation = new Relation([
        'user_id_1' => $idUser,
         'user_id_2' => $id,
         'state_id' => 1,
      ]);
      $myUser = user::where('id',$idUser)->first();
      $myUser->relations()->save($relation);

       return redirect('/front/relations');
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
    public function destroy($id)
    {
      $idUser = \Auth::user()->id;
      $relation = new Relation([
        'user_id_1' => $idUser,
         'user_id_2' => $id,
         'state_id' => 1,
      ]);
      $myUser = user::where('id',$idUser)->first();
      $myUser->relations()->delete($relation);
      return redirect('/front/relations');

    }
}
