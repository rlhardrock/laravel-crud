<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //Protector de acceso no autorizado
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        //view  index.blade.php
        return view('player.index')
        ->with('players',$players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view  create.blade.php
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $players = new Player();
        $players->id = $request->get('id');
        $players->name = $request->get('name');
        $players->surname = $request->get('surname');
        $players->email = $request->get('email');
        $players->cellphone = $request->get('cellphone');
        $players->city = $request->get('city');
        $players->profession = $request->get('profession');
        $players->team = $request->get('team');
        $players->position = $request->get('position');
        $players->alias = $request->get('alias');
        $players->inscription = $request->get('inscription');
        $players->status = $request->get('status');

        if($photograph = $request -> file('photograph')){
            $routeSaveImg = 'photograph/';
            $imageplayer = date('YMdhis').".".$photograph->getClientOriginalExtension();
            $photograph->move($routeSaveImg, $imageplayer);
            $players['photograph'] = $imageplayer;
        }

        $players->save();
        return redirect('/player');
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
        //view  edit.blade.php
        $player = Player::find($id);
        return view('player.edit', compact('id'))
        ->with('player',$player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        /* $id,  */
        $ravager = $request->all();
        /*
        $players->id = $request->get('id');
        $players->name = $request->get('name');
        $players->surname = $request->get('surname');
        $players->email = $request->get('email');
        $players->cellphone = $request->get('cellphone');
        $players->city = $request->get('city');
        $players->profession = $request->get('profession');
        $players->team = $request->get('team');
        $players->position = $request->get('position');
        $players->alias = $request->get('alias');
        $players->inscription = $request->get('inscription');
        $players->status = $request->get('status');
        */

        if($photograph = $request -> file('photograph')){
            $routeSaveImg = 'photograph/';
            $imageplayer = date('YMdHis').".".$photograph->getClientOriginalExtension();
            $photograph->move($routeSaveImg, $imageplayer);
            $ravager['photograph'] = $imageplayer;
        }else{
            unset($ravager['photograph']);
        }

        $player->update($ravager);
        /*  return redirect()->route('player.index');*/
        return redirect('/player');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
        $player = Player::find($id);
        $player->delete();
        return redirect('/player')->with('Delete','OK');
    }
    }
}
