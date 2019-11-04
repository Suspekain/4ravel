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
  public function FormularioPostMostrar(Request $request){
    $nombre = $request->input('nombre')." ".$request->input('apellido');
    $str = file_get_contents('saludos.json');
    $idiomas = json_decode($str,true);
    return view('formulariopostmostrar', ['nombre' => $nombre, 'idiomas' => $idiomas]);
  }
  public function FormularioPostMisma(){
    return view('formulariopostmisma');
  }
  public function FormularioPostMismaMostrar(Request $request){
    $nombre = $request->input('nombre')." ".$request->input('apellido');
    $str = file_get_contents('saludos.json');
    $idiomas = json_decode($str,true);
    return view('formulariopostmisma', ['nombre' => $nombre, 'idiomas' => $idiomas]);
  }
}
