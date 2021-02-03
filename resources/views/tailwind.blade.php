<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwind --->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tailwind</title>
</head>
<body>

    {{-- Clase       Breakpoint          Propiedades
        envase	    Ninguna	            ancho: 100%;
                    sm ( 640 px )	    ancho máximo: 640px ;
                    md ( 768 px )	    ancho máximo: 768px ;
                    lg ( 1024 px )	    ancho máximo: 1024px ;
                    xl ( 1280 px )	    ancho máximo: 1280px ;
                    2xl ( 1536 px )	    ancho máximo: 1536px ; --}}
                    
    <h1>Contenedor Simple .container</h1>
    <div class="container bg-blue-200">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique magnam natus fugit deleniti saepe dicta dolore mollitia inventore ut. Quas cum nulla at et quod quibusdam culpa eveniet enim ex.</p>
    </div>
    <h1>Contenedor con centrado automatico .mx-auto</h1>
    <div class="container bg-blue-200 mx-auto">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique magnam natus fugit deleniti saepe dicta dolore mollitia inventore ut. Quas cum nulla at et quod quibusdam culpa eveniet enim ex.</p>
    </div>
    <h1>Contenedor con centrado automatico y padding .px-{size}</h1>
    <div class="container bg-blue-200 mx-auto px-4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique magnam natus fugit deleniti saepe dicta dolore mollitia inventore ut. Quas cum nulla at et quod quibusdam culpa eveniet enim ex.</p>
    </div>
    <h1 class>Border Box</h1>
    <div class="box-border h-32 w-32 p-4 bg-blue-300 border-4 mx-auto">
        <p>Lorem ipsum dolor sit.</p>
    </div>
    <h1>Box Content</h1>
    <div class="box-content h-32 w-32 p-4 border-4 bg-blue-900 mx-auto">
        <p class="text-white">Lorem ipsum dolor sit.</p>
    </div>
</body>
</html>