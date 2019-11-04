<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .izena {
                font-size: 84px;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="izena m-b-md">
                    Ekain Susperregi
                </div>

                <div class="title m-b-md">
                  Tarea 4.1 - Rutas y Vistas
                </div>
                <div class="links">
                    <a href="{{route('contacto')}}">Contacto</a>
                    <a href="{{route('blog','1')}}">Blog</a>
                    <a href="{{route('nblog',[1,'Ekain'])}}">Blog con nombre</a>
                </div>
                <br><br>
                <div class="title m-b-md">
                  Tarea 4.2 - Rutas Vista Controlador
                </div>
                <div class="links">
                    <a href="{{route('saludo')}}">Saludo</a>
                    <a href="{{route('saludonombre',['Ekain'])}}">Saludo con nombre</a>
                    <a href="{{route('saludonombrecolor',['Ekain', 'ff7070'])}}">Saludo con nombre y color</a>
                </div>
                <br><br>
                <div class="title m-b-md">
                  Tarea 4.3 - Formularios
                </div>
                <div class="links">
                    <a href="{{route('formulario')}}">Formulario [get]</a>
                    <a href="{{route('formulariopost')}}">Formulario [post]</a>
                    <a href="{{route('formulariopostmisma')}}">Formulario [post] Misma vista</a>
                </div>
                <br><br>
                <div class="title m-b-md">
                  Tarea 4.4 - Formularios con validación
                </div>
                <div class="links">
                    
                </div>

            </div>
        </div>
    </body>
</html>
