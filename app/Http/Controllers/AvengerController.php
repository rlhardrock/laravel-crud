<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avenger;

class AvengerController extends Controller
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
        $avengers = Avenger::all();
        //view  index.blade.php
        return view('avenger.index')
        ->with('avengers',$avengers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view  create.blade.php
        return view('avenger.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $avengers = new Avenger();
        $avengers->id = $request->get('id');
        $avengers->name = $request->get('name');
        $avengers->bioma = $request->get('bioma');
        $avengers->region = $request->get('region');
        $avengers->conservation = $request->get('conservation');
        $avengers->scientific = $request->get('scientific');
        $avengers->family = $request->get('family');
        $avengers->orden = $request->get('orden');

        if($photograph = $request -> file('photograph')){
            $routeSaveImg = 'photograph/';
            $imageAvenger = date('YMdhis').".".$photograph->getClientOriginalExtension();
            $photograph->move($routeSaveImg, $imageAvenger);
            $avengers['photograph'] = $imageAvenger;
        }

        $avengers->save();
        return redirect('/avenger');
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
        $avenger = Avenger::find($id);
        return view('avenger.edit', compact('id'))
        ->with('avenger',$avenger);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avenger $avenger)
    {
        /* $id,  */
        $ravager = $request->all();
        /* $avenger = Avenger::find($id);
        $avenger->name = $request->get('name');
        $avenger->bioma = $request->get('bioma');
        $avenger->region = $request->get('region');
        $avenger->conservation = $request->get('conservation');
        $avenger->scientific = $request->get('scientific');
        $avenger->family = $request->get('family');
        $avenger->orden = $request->get('orden'); */

        if($photograph = $request -> file('photograph')){
            $routeSaveImg = 'photograph/';
            $imageAvenger = date('YMdHis').".".$photograph->getClientOriginalExtension();
            $photograph->move($routeSaveImg, $imageAvenger);
            $ravager['photograph'] = $imageAvenger;
        }else{
            unset($ravager['photograph']);
        }

        $avenger->update($ravager);
        /*  return redirect()->route('avenger.index');*/
        return redirect('/avenger');
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
        $avenger = Avenger::find($id);
        $avenger->delete();
        return redirect('/avenger')->with('Delete','OK');
    }
    }
}
