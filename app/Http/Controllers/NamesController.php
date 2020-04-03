<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamesController extends Controller
{
    //
  public function index(){
    return \App\Models\Name::orderBy('id', 'desc')->get();
  }

  public function index2($id){
    return \App\Models\Name::findOrFail($id);
  }

  public function create(){
    return \App\Models\Name::create(['first_name' => "John", 'second_name' => 'F. Kennedy']);
  }
}
