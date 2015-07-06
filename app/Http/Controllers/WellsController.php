<?php

namespace App\Http\Controllers;

use App\Well;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\WellRequest;
use Illuminate\Http\Request;

class WellsController extends Controller
{
    public function index(){
        $wells = Well::orderBy('created_at', 'desc')->get();
        return view('wells.index', compact('wells'));
    }
    public function show($id){
        $well = Well::findOrFail($id);
        return view('wells.show', compact('well'));
    }

    public function create(){
        return view('wells.create');
    }

    public function store(WellRequest $request){
        //Validation passed at this point
        //add user_id as a foreign key

        $well = new Well($request->all());
        \Auth::user()->wells()->save($well); //this automatically adds user FK to well

//        $input = $request->all();
//        Well::create($input);
        return redirect('wells');
    }

    public function edit($id){
        //Validation passed at this point
        $well = Well::findOrFail($id);
        return view('wells.edit', compact('well'));
    }

    public function update($id, WellRequest $request){
        //Validation passed at this point
        $well = Well::findOrFail($id);
        $well->update($request->all());
        return redirect('wells');
    }
}
