<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Layout</title>
</head>

<body>


    {{-- ejemplo 1 --}}
    {{-- <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-blue-300 box-content">
            <div class="bg-gray-600 h-full w-full">

            </div>
        </div> --}}

    {{-- padding p es el tamano del margen del componente hacia adentro, por lo que darle un 
        padding significa darle un espacio mas pequeno que el senalado al contenedor donde se dibujara --}}

    {{-- margin es espacio fuera del componente --}}

    {{-- El border se dibuja hacia adentro del componente --}}

    {{-- box content hace que lo que le agreguemos al componente este fuera del tamano definido
        por lo que para este caso el tamano del contenido siempre sera de w-64 * h-32 --}}

    {{-- ejemplo 2 --}}
    <div class="container mt-3 bg-blue-300">
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">1</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline">2</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">3</div>
    </div>

    {{-- por defecto los elementos tienen display block --}}

    {{-- inline hace que los componentes se vean uno al lado del otro, tratando de que ocupen el menor 
        espacio posible, pero no se puede agregarles padding o margin en y --}}

    {{--  --}}
</body>

</html>
