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
        <h1>Grid de Tailwind</h1>
        <div class="grid grid-cols-4 grid-rows-2 gap-3">
            <div class="bg-blue-200">Holis</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 col-start-3 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-500">D</div>
        </div>
        <br>

        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-200">1</div>
            <div class="bg-blue-300">2</div>
            <div class="bg-blue-400">3</div>
            <div class="bg-blue-500">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-500">6</div>
            <div class="bg-blue-500">7</div>
            <div class="bg-blue-500">8</div>
            <div class="bg-blue-500">9</div>
            <div class="bg-blue-500">10</div>
            <div class="bg-blue-500">11</div>
        </div>

        <br>

        <h1>Tipografias</h1>
        <br>
        <h2 class="">Titulos</h2>

        <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, soluta praesentium. Impedit distinctio
            error modi sit ex voluptatibus veritatis consequatur minima at deleniti, dignissimos illo reprehenderit
            accusamus sed eveniet minus!</p>

        <ul class="">
            <li class="">Uno</li>
            <li class="">Dos</li>
            <li class="">Tres</li>
        </ul>
    </div>
</body>

</html>
