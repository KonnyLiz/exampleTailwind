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

    {{-- ejemplo 2
    <div class="container mt-3 bg-blue-300">
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">3</div>
    </div> --}}

    {{-- por defecto los elementos tienen display block --}}

    {{-- inline hace que los componentes se vean uno al lado del otro, tratando de que ocupen el menor 
        espacio posible, pero no se puede agregarles padding o margin en y --}}

    {{-- inline-block hace que reconozca los div como elementos con sus margin y padding --}}

    {{-- <div class="container mt-3 bg-blue-300">
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block lg:hidden">1</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
        <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">3</div>
    </div> --}}

    {{-- podemos ocultar cosas con hidden como clase de tailwind 
        tambien sigue la misma nomeclatura para lo responsive lg:hidden --}}

    {{-- ejemplo 3 --}}
    {{-- <div class="container">

        <img class="float-left" src="https://images.unsplash.com/photo-1573658070990-e4c084b95cc5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">

        <img class="float-right"
            src="https://images.unsplash.com/photo-1577210944468-9a7e75687a54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            alt="">

        <p class="mb-2 clear-both">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fuga doloremque debitis.
            Sed magnam quidem, praesentium dolorem soluta ipsum tenetur perspiciatis eligendi officia qui quod beatae
            dignissimos, libero aliquid provident.</p>
        <p class="mb-2">Accusantium, numquam. Nam provident rem est eaque praesentium quidem consectetur rerum,
            sapiente necessitatibus aliquam obcaecati, aut veritatis voluptatem sed quos magnam nesciunt corporis
            exercitationem beatae cupiditate consequuntur. Voluptates, numquam veniam.</p>
        <p class="mb-2">Doloribus voluptatibus ipsa molestiae. Possimus iusto reiciendis ex, commodi in
            mollitia eos tempore minima voluptate, adipisci itaque iure dolores. Perferendis magni tenetur voluptatem
            beatae. Reprehenderit modi suscipit repellat provident quos.</p>
        <p class="mb-2">Consequatur perspiciatis voluptatibus ipsa pariatur. Quibusdam natus ea aut obcaecati
            pariatur minima commodi magnam incidunt, esse cupiditate distinctio, asperiores quis fugiat iste illo
            explicabo officia veritatis accusamus corporis eaque adipisci.</p>
        <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore dolorum
            dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
            repellat. Tempore magnam ducimus odit!</p>
        <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore dolorum
            dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
            repellat. Tempore magnam ducimus odit!</p>
        <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore dolorum
            dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
            repellat. Tempore magnam ducimus odit!</p>
    </div> --}}

    {{-- float-left float-right hace que la imagen este posicipnada a la izquierda, pero que a partir de ella
        al lado derecho, comience a dibujarse el texto --}}

    {{-- clear-right formatea el float del texto por lo que lo ignora y continua desde la iamgen
            de la rerecha pero abajo --}}

    {{-- clear-both formatea el left del texto y lo coloca debajo de ambas imagenes --}}

    {{-- ejemplo 4 portadas --}}
    {{-- <div class="container bg-gray-400">
        <img class="w-full h-64 object-cover object-top"
            src="https://images.unsplash.com/photo-1615958354408-c15ad934a549?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8c2FrdXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            alt="">
    </div> --}}

    {{-- las imagenes por defecto tienen objet-fit, lo pasamos a object-contain 
        para redimensionar la imagen, muestra la imagen completa --}}

    {{-- objet-cover nos permite dejar que la imagen se redimnsione deacuerdo al tamano del contenedor --}}


    {{-- ejemplo 5 overflow --}}
    {{-- <div class="container">
        <div class="bg-gray-400 p-4 h-64 overflow-auto">
            <p class="mb-2 clear-both">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fuga doloremque
                debitis.
                Sed magnam quidem, praesentium dolorem soluta ipsum tenetur perspiciatis eligendi officia qui quod
                beatae
                dignissimos, libero aliquid provident.</p>
            <p class="mb-2">Accusantium, numquam. Nam provident rem est eaque praesentium quidem consectetur
                rerum,
                sapiente necessitatibus aliquam obcaecati, aut veritatis voluptatem sed quos magnam nesciunt corporis
                exercitationem beatae cupiditate consequuntur. Voluptates, numquam veniam.</p>
            <p class="mb-2">Doloribus voluptatibus ipsa molestiae. Possimus iusto reiciendis ex, commodi in
                mollitia eos tempore minima voluptate, adipisci itaque iure dolores. Perferendis magni tenetur
                voluptatem
                beatae. Reprehenderit modi suscipit repellat provident quos.</p>
            <p class="mb-2">Consequatur perspiciatis voluptatibus ipsa pariatur. Quibusdam natus ea aut
                obcaecati
                pariatur minima commodi magnam incidunt, esse cupiditate distinctio, asperiores quis fugiat iste illo
                explicabo officia veritatis accusamus corporis eaque adipisci.</p>
            <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore
                dolorum
                dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
                repellat. Tempore magnam ducimus odit!</p>
            <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore
                dolorum
                dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
                repellat. Tempore magnam ducimus odit!</p>
            <p class="mb-2">Dicta nihil fugit, reiciendis porro, facere, impedit error consequatur tempore
                dolorum
                dolores laboriosam eum deserunt exercitationem nostrum sit. Quam fugiat fuga illo iusto iste veniam
                repellat. Tempore magnam ducimus odit!</p>
        </div>
    </div> --}}

    {{-- overflow es el desbordamiento de datos
        overflow-hidden  oculta el desbordamiento
        overflow-scroll crea una barra para scroll en el texto que se desborda
            aparecen ambas barras
        overflow-y-scroll solamente scroll en eje y
        overflow-auto el navegador agrega el scroll donde es necesario --}}

    {{-- ejemplo 6 posicionamiento absolutely relative --}}
    {{-- <div class="container mt-4">
        <div class="bg-gray-300 p-4 relative">
            <div class="bg-gray-600 p-4">
                <div class="bg-blue-400 p-4"></div>
                <div class="bg-blue-600 p-4 absolute inset-y-0 left-0"></div>
            </div>
        </div>
    </div> --}}


    {{-- por defecto los elementos tienen un flujo predeterminado, posicionamiento estatico es por defecto
        el posicionamiento absoluto puede sacar los elementos del flujo --}}

    {{-- relative ayuda a posicionar otros elementos con restecto al que tiene la clase
            relative el elemento padre y absolute el elelemnto a posicionar 
            el elemento hij siempre buscara la clase padre mas cercana con relative para posicionar --}}

    {{-- ejemplo 7 fixed --}}
    <nav class="bg-blue-300 h-16 fixed inset-x-0">
        Este es el navegador o menu
    </nav>

    {{-- al princio, el nav se oculta cuando hacemos scroll 
        fixed hace que el nav se mantenga fijo en la parte de arriba--}}

    <aside class="w-16 bg-gray-800 fixed inset-y-0">

    </aside>

    <div class="container pt-16">
        {{-- bajamos el contenido con pt-16 para que el nav no lo cubra --}}
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea delectus sequi soluta nobis dignissimos, quis ut
            tempora. Atque veritatis sint hic temporibus deserunt corrupti natus asperiores officiis, neque iusto
            nesciunt?</p>
        <p>Tempora ipsam maiores dignissimos, natus sint quod fugit delectus perferendis. Impedit non, labore
            perspiciatis iure ipsam explicabo quo velit a provident ipsum architecto molestiae eveniet fugit asperiores,
            nesciunt quasi voluptas.</p>
        <p>Optio animi natus ab rem provident delectus veritatis, cum nostrum tempore quasi porro ad cumque ut commodi,
            eveniet molestias velit quis, error in fuga dignissimos. Sit quaerat provident fuga dolorum.</p>
        <p>Nemo repudiandae explicabo tempore placeat pariatur eos quae animi ullam in obcaecati. Sed nobis eius
            molestias, tempore iure odit iusto placeat repellendus ipsam vitae a explicabo, culpa at nam fugit.</p>
        <p>Aliquam, perferendis totam quae modi praesentium, quia ipsa eos expedita laborum odit eaque repellat officiis
            fuga. Voluptas asperiores nulla culpa quam. Doloremque debitis beatae quam eveniet saepe porro, quod
            perferendis.</p>
        <p>Temporibus maxime modi quas eaque velit incidunt et, voluptatibus est! Iusto illum placeat quas quis itaque
            voluptatibus laboriosam doloremque eius fugit! Sint a, possimus iure accusamus odit ipsum odio quae.</p>
        <p>Cumque tenetur ratione, repellat mollitia corporis maxime voluptate incidunt unde, error consectetur iste et
            quasi voluptatum. Placeat inventore fugiat enim est aliquam illo, consectetur voluptatum cupiditate ipsam
            voluptate! Laboriosam, suscipit.</p>
        <p>Voluptates nemo molestiae reprehenderit odio? Incidunt assumenda aspernatur tempore vero ex sed ratione
            dolorem quidem perferendis maiores. Aut aliquid autem cumque dolorum impedit maiores natus reprehenderit,
            nihil facilis, sequi magnam?</p>
        <p>Vel totam beatae id quidem eaque ullam voluptatem neque! Debitis fugit saepe non sint culpa eligendi odit
            cumque placeat! Illum, totam cum. Labore iste impedit fuga dignissimos obcaecati dolor ea!</p>
        <p>Sit ab minima culpa consectetur, fuga consequuntur molestias quibusdam perferendis voluptatibus. Neque hic
            quisquam tempore debitis facere. Perspiciatis consectetur nisi officiis sequi eum. Mollitia consectetur id
            omnis tempore commodi eligendi.</p>
        <p>Dolor dicta nulla aliquam, reiciendis omnis similique non ut inventore laudantium aspernatur totam corrupti
            rerum tempore explicabo deserunt ea nemo illo nesciunt, consequuntur, placeat ad obcaecati. Eveniet quam
            consequuntur ad.</p>
        <p>Porro expedita quam aliquid repellendus modi dicta aperiam repellat, laboriosam voluptatibus consectetur
            excepturi vero itaque quasi exercitationem placeat dolorum consequuntur, voluptates a autem, labore corrupti
            culpa optio! Eaque, ab temporibus.</p>
        <p>Culpa fugit nobis quae, quam placeat nesciunt libero alias sequi in animi minima officia. Quibusdam dicta
            ipsam laborum, sunt nihil quidem distinctio reiciendis placeat reprehenderit facilis, corrupti delectus. Ut,
            laboriosam.</p>
        <p>Ipsum, vero mollitia dolor ipsam commodi aliquam? Aliquam, soluta, repellendus cum dolore magnam doloribus
            libero quaerat, maxime vitae labore vero. Delectus repudiandae minima voluptas veniam earum quae velit,
            maiores adipisci.</p>
        <p>Sequi soluta accusantium accusamus debitis fuga aliquid at deleniti explicabo! Animi modi voluptate ipsa fuga
            quidem sunt aspernatur voluptatibus accusantium! A labore aspernatur ratione et, sed voluptatem nisi id
            totam.</p>
        <p>Provident quaerat laborum explicabo molestiae, veniam corrupti accusamus eum animi fugiat perferendis ipsam
            quod modi! Exercitationem impedit unde ipsum perferendis vero voluptatibus commodi doloremque! Ut reiciendis
            magni eius eligendi itaque.</p>
    </div>
</body>

</html>
