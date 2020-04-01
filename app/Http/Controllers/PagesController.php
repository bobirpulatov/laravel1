<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    //
  public function index(){
    $title = "Welcome to Laravel";
    return view("pages.index")->with('title', $title);
  }

  public function about(){
    return view("pages.about");
  }

  public function services(){
    $data = [ "Services 1", "Services 2", "Services 3"];
    return view("pages.services")->with('data', $data);
  }
}
