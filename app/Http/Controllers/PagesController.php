<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class PagesController extends Controller
{
    //
  public function index(){

    $title = "Welcome to Laravel";
    return view("pages.index")->with('title', $title);
  }

  public function about($a, $b){
    $db = \App\Models\Name::all();

    dd($db);

  }

  public function services(){
    $data = [ "Services 1", "Services 2", "Services 3"];
    return view("pages.services")->with('data', $data);
  }
}
