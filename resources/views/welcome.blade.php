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
        <h2 class="font-sans text-4xl">Titulos</h2>

        <p class="font-mono">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, soluta praesentium.
            Impedit distinctio
            error modi sit ex voluptatibus veritatis consequatur minima at deleniti, dignissimos illo reprehenderit
            accusamus sed eveniet minus!</p>

        <ul class="font-serif">
            <li>Uno</li>
            <li>Dos</li>
            <li>Tres</li>
        </ul>

        <p class="font-nunito font-thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facere est
            iusto? Consequatur maxime, ab
            accusantium architecto saepe, distinctio vitae suscipit provident tenetur mollitia, doloremque et
            exercitationem. Pariatur, omnis impedit.</p>

        <p class="font-nunito font-extralight">Similique tempore, sed nisi consequatur, debitis at eum numquam
            voluptates commodi explicabo et sequi aliquam
            esse nihil quod eos odio iusto maiores corporis neque eligendi ea illum dolorem voluptatum. Aut.</p>

        <p class="font-nunito font-normal">Aspernatur deserunt, consequatur distinctio laudantium rem sit quod officia
            laboriosam, velit quisquam sint
            exercitationem dicta dignissimos sapiente qui reprehenderit quae minus voluptas quidem ratione placeat,
            ipsam labore consectetur? Alias, veniam.</p>

        <p class="font-nunito font-medium">Placeat in aspernatur, beatae fuga laudantium ipsa ad quo facilis veniam iste
            aperiam earum quia, iusto vel
            cupiditate, voluptatem incidunt inventore. Dolorum, nulla nostrum perspiciatis nam praesentium eos saepe
            iure!</p>

        <h3>Espaciados</h3>

        <p class="tracking-widest">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus iste
            quaerat rem sint eum a
            inventore. Magnam nostrum, ad excepturi, tempora ea repudiandae, praesentium corporis velit dolorem soluta
            molestias.</p>

        {{-- estilos para listas --}}
        <ul class="list-disc mb-3 list-inside">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ducimus incidunt provident eum nam
                voluptas atque explicabo tempore placeat molestias est, quis enim aperiam doloribus sint, harum quasi
                ipsam praesentium.</li>
            <li>Ad repellendus sint architecto exercitationem blanditiis dolores nulla commodi quae est velit sit earum
                explicabo, nesciunt veritatis voluptatum hic eius. Beatae atque officiis excepturi facilis, aliquid nisi
                aspernatur blanditiis porro?</li>
            <li>Dolores, laudantium ad ullam dicta id deleniti. Aspernatur repudiandae nesciunt dolore. Provident
                repellat eligendi tempora beatae sit aspernatur, dolor asperiores voluptas voluptatum! Saepe, optio
                nostrum. Quae reprehenderit inventore commodi facilis?</li>
            <li>Molestias unde, maiores dolor praesentium tempore aliquid, est qui odit quasi nisi blanditiis atque?
                Fugit cumque porro accusamus veritatis facere, ex et eum iste, quod recusandae maiores veniam, ea illo?
            </li>
        </ul>

        <ul class="list-decimal mb-3 list-inside">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ducimus incidunt provident eum nam
                voluptas atque explicabo tempore placeat molestias est, quis enim aperiam doloribus sint, harum quasi
                ipsam praesentium.</li>
            <li>Ad repellendus sint architecto exercitationem blanditiis dolores nulla commodi quae est velit sit earum
                explicabo, nesciunt veritatis voluptatum hic eius. Beatae atque officiis excepturi facilis, aliquid nisi
                aspernatur blanditiis porro?</li>
            <li>Dolores, laudantium ad ullam dicta id deleniti. Aspernatur repudiandae nesciunt dolore. Provident
                repellat eligendi tempora beatae sit aspernatur, dolor asperiores voluptas voluptatum! Saepe, optio
                nostrum. Quae reprehenderit inventore commodi facilis?</li>
            <li>Molestias unde, maiores dolor praesentium tempore aliquid, est qui odit quasi nisi blanditiis atque?
                Fugit cumque porro accusamus veritatis facere, ex et eum iste, quod recusandae maiores veniam, ea illo?
            </li>
        </ul>

        <h3 class="text-left md:text-center lg:text-right underline uppercase">Titulo h3</h3>
        
        <p class="text-red-500 hover:text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rerum quis veritatis sit asperiores qui
            mollitia placeat laboriosam repellat. Tenetur quas eius obcaecati harum accusamus natus minima unde dolor
            quibusdam!</p>

        <ul>
            <li class="line-through">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quae dolorem ipsum illo laboriosam
                accusantium minima libero, optio cum veniam velit nihil voluptatum ea soluta qui eligendi? Delectus,
                optio placeat!</li>
            <li>Atque cupiditate ducimus et velit sed! Quae laboriosam magnam reprehenderit, non soluta ullam odit quo
                deserunt ducimus quaerat quod animi eos expedita et iste veniam earum dignissimos nam debitis incidunt.
            </li>
            <li>Maxime excepturi eaque magni accusamus! Illo obcaecati voluptatibus eveniet at vitae, fuga debitis
                nesciunt porro laborum dignissimos quos quas vel in quod recusandae? Corporis nisi repellendus culpa
                veniam necessitatibus a?</li>
            <li class="lowercase">Aspernatur eaque molestiae pariatur voluptate tempora, magni minus cumque neque nostrum corrupti nisi
                cum illo porro nemo iure facilis voluptatum, nulla consequuntur, ea sequi eligendi consequatur corporis
                vero aliquam? Eligendi?</li>
        </ul>
    </div>
</body>

</html>
