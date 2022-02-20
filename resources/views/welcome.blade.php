<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel with Tailwind</title>

    <style>
        .image {
            background-image: url("{{ asset('img/camera.jpg') }}");
            height: 400px;
            width: 900px;
            /* centrando la img */
            margin-left: auto;
            margin-right: auto;
        }

    </style>
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

        <p class="text-red-500 hover:text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
            rerum quis veritatis sit asperiores qui
            mollitia placeat laboriosam repellat. Tenetur quas eius obcaecati harum accusamus natus minima unde dolor
            quibusdam!</p>

        <ul>
            <li class="line-through">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quae dolorem ipsum
                illo laboriosam
                accusantium minima libero, optio cum veniam velit nihil voluptatum ea soluta qui eligendi? Delectus,
                optio placeat!</li>
            <li>Atque cupiditate ducimus et velit sed! Quae laboriosam magnam reprehenderit, non soluta ullam odit quo
                deserunt ducimus quaerat quod animi eos expedita et iste veniam earum dignissimos nam debitis incidunt.
            </li>
            <li>Maxime excepturi eaque magni accusamus! Illo obcaecati voluptatibus eveniet at vitae, fuga debitis
                nesciunt porro laborum dignissimos quos quas vel in quod recusandae? Corporis nisi repellendus culpa
                veniam necessitatibus a?</li>
            <li class="lowercase">Aspernatur eaque molestiae pariatur voluptate tempora, magni minus cumque neque
                nostrum corrupti nisi
                cum illo porro nemo iure facilis voluptatum, nulla consequuntur, ea sequi eligendi consequatur corporis
                vero aliquam? Eligendi?</li>
        </ul>
    </div>

    <div class="container">
        <h1 class="text-center text-3xl font-bold mb-3">Backgrounds</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda perferendis odio sapiente sunt
            perspiciatis, id accusantium dicta ipsam doloribus voluptas eaque maiores ducimus! Nam maiores quam
            obcaecati consequatur deleniti minus.</p>
        {{-- <div class="image bg-cover bg-center bg-clip-padding border-8 border-blue-600 border-dashed"></div> --}}
        {{-- bg-left es por defecto, pero tammbien se puede centrar y alinear a la derecha --}}
        {{-- bg-contain acomoda la img respecto al ancho --}}
        {{-- bg-cover acomoda la imagen a todo el espacio que se le de --}}
        {{-- para no repetir img para completar los px bg-no-repeat --}}

        <div class="image bg-fixed"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odio voluptatem hic quae! Odit odio esse
            quisquam reprehenderit inventore fugiat consectetur, ratione quis perferendis doloremque accusantium
            asperiores? Impedit, alias consequatur?</p>
        <p>Cum reprehenderit eaque, nam nemo quia fugiat asperiores suscipit, distinctio ea laboriosam fuga similique
            illo accusamus beatae. Laboriosam, rem excepturi vitae quam, aliquid, minus quo similique laudantium unde
            corporis nulla.</p>
        <p>Illo voluptates cumque ipsa asperiores, aperiam ex officiis aspernatur quia perspiciatis, neque praesentium
            debitis ad qui voluptatum est voluptatem ipsam error magni voluptate quod? Quas dolore ducimus aperiam culpa
            temporibus.</p>
        <p>Corporis est expedita consequatur excepturi aut vitae distinctio. Consequuntur aliquam id assumenda tempore,
            at itaque. Placeat non id consequuntur voluptate rem sit obcaecati officia est, libero accusantium rerum
            suscipit cum?</p>
        <p>Laborum iste ut saepe deserunt enim placeat sapiente quos? Ipsam rerum perspiciatis vitae consectetur sed,
            nisi laboriosam perferendis repellendus vero deleniti culpa illum aperiam reiciendis aut quibusdam sapiente
            eaque dolorem.</p>
        <p>Aperiam voluptas quaerat soluta culpa praesentium animi, tempora sapiente reiciendis necessitatibus vitae
            quis, magni quidem blanditiis natus expedita debitis ducimus repudiandae deleniti eum quos exercitationem
            minus assumenda architecto. Nostrum, est.</p>
        <p>Totam provident tempore beatae laborum et iure possimus. Ut, vel. Facere enim sit voluptatem blanditiis
            aspernatur, velit consequuntur, hic culpa nihil illum soluta doloribus commodi nam, saepe ex veniam modi?
        </p>
        <p>Consequuntur possimus ducimus voluptas ex eaque omnis voluptatem! Sunt praesentium optio saepe molestiae,
            doloremque eos laudantium ullam illum natus maiores reiciendis? Explicabo voluptatem, iste voluptates
            officiis quia quis corrupti ex.</p>
        <p>Nemo ipsam minus, porro asperiores consequuntur unde nihil autem pariatur blanditiis quo nesciunt. Rerum
            ipsam possimus tempora illum maiores non libero, impedit atque magni labore assumenda eius ad! Vero, ea.</p>
        <p>Voluptatum id blanditiis, distinctio ipsam veniam adipisci eum fuga ab impedit atque tenetur velit, aut error
            nesciunt saepe dolores, excepturi nam quaerat hic! Distinctio aut repellendus architecto sint tenetur error.
        </p>
    </div>

    <div class="bg-blue-400 h-12 bg-opacity-25"></div>
    <div class="bg-gradient-to-r from-blue-200 via-green-600 to-yellow-200 text-center font-extrabold text-5xl bg-clip-text text-transparent">
        Holis este es un ejemplo con gradiente
    </div>
</body>

</html>
