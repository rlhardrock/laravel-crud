<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
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
        $animals = Animal::all();
        //view  index.blade.php
        return view('animal.index')
        ->with('animals',$animals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view  create.blade.php
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animals = new Animal();
        $animals->specie = $request->get('specie');
        $animals->region = $request->get('region');
        $animals->biome = $request->get('biome');
        $animals->country = $request->get('country');
        $animals->save();
        return redirect('/animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //view  show.blade.php   optional
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
        $animal = Animal::find($id);
        return view('animal.edit')
        ->with('animal',$animal);
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
        $animal = Animal::find($id);
        $animal->specie = $request->get('specie');
        $animal->region = $request->get('region');
        $animal->biome = $request->get('biome');
        $animal->country = $request->get('country');
        $animal->save();
        return redirect('/animal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect('/animal');
    } */

    /* public function destroy($id)
    {
        Animal::where('id', $id)->delete();
        return redirect('/animal');
    } */

    public function destroy($id)
    {
        Animal::destroy([$id]);
        return redirect('/animal');
    }
}
