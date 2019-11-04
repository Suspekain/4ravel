<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
  public function Formulario(){
    return view('formulario');
  }
  public function FormularioMostrar(){
    return view('formulariomostrar');
  }
  public function FormularioPost(){
    return view('formulariopost');
  }
  public function FormularioPostMostrar(){
    return view('formulariopostmostrar');
  }
}
