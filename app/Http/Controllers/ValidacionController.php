<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidacionController extends Controller
{
  public function Validacion(Request $request){
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $mail = $request->input('mail');
    $telefono = $request->input('telefono');
    if (!empty($nombre) && !empty($apellido) && !empty($mail) && !empty($telefono)) {
      if (2 < strlen($nombre) && strlen($nombre) < 15) {
        if (2 < strlen($apellido) && strlen($apellido) < 20) {
          if (strlen($telefono) == 9) {
            $digito1 = substr($telefono,0,1);echo $digito1;
            if ($digito1 == "6" || $digito1 == "7" || $digito1 == "9") {
              return view('validacion', ['nombre' => $nombre, 'apellido' => $apellido, 'mail' => $mail, 'telefono' => $telefono]);
            } else {
              $alerta = "El numero de telefono debe empezar con 6, 7 o 9";
            }
          } else {
            $alerta = "El numero de telefono debe tener 9 digitos";
          }
        } else {
          $alerta = "El apellido debe tener entre 2 y 20 caracteres";
        }
      } else {
        $alerta = "El nombre debe tener entre 2 y 15 caracteres";
      }
    } else {
      $alerta = "Se requieren todos los campos!";
    }

    if (isset($alerta)){
      return view('validacion', ['alerta' => $alerta]);
    }
  }
}
