<html>
    <head>
        <title>
            хай живе україна - @yield('titulo')</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        {{--Al llamar el elemento por su nombre desde otra paginacion
            podremos implementar la plantilla--}}
 
        {{--Este conteiner es para Boostrap--}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
            <a class="navbar-brand">Brand</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>