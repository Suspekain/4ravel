<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
  public function Saludo(){
    return view('saludo');
  }
}
