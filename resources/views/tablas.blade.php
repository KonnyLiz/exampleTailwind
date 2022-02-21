<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel with Tailwind</title>


</head>

<body>
    <div class="container">
        {{-- por defecto las tablas son colapsed (se montqn una linea en la otra)
            para quitarlo se puede usar border-separate --}}
        <table class="table w-full border-separate lg:border-collapse table-fixed">

            <thead>
                <tr>
                    <th class="w-1/4">Ciudad</th>
                    <th class="w-1/4">Pais</th>
                    <th class="w-1/2">Descripcion</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Guatemala</td>
                    <td>Xela</td>
                    <td>En algun dia de mi vida</td>
                </tr>
                <tr>
                    <td>Costa Rica</td>
                    <td>La Fortuna</td>
                    <td>Julio 2018</td>
                </tr>
                <tr>
                    <td>Nicaragua</td>
                    <td>San Juan del Sur</td>
                    <td>Julio 2018</td>
                </tr>

            </tbody>

        </table>
    </div>


</body>

</html>
