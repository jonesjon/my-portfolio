<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Portfólio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
</head>
<body>

    <header class="d-flex p-2 bg-primary">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
            <div class="container-fluid mx-5">
                <img class="mx-3" src="{{ asset('img/logo.jpeg') }}" alt="Logo João Victor Desenvolvimento" height="150" width="150">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex flex-grow-1 justify-content-center">
                    <li class="nav-item mx-2">
                    <a class="nav-link active text-white font-weight-bold text-uppercase" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="#">Sobre mim</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="#">Projetos</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="#">Contatos</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="projects d-flex">
        <div class="container-fluid w-auto d-flex align-items-center">
            <div class="socials-media d-inline-flex flex-column align-items-center">
                <a href=""><i class="fa-brands fa-square-instagram text-primary"></i></a>
                <a href=""><i class="fa-brands fa-facebook text-primary"></i></a>
                <a href=""><i class="fa-brands fa-linkedin text-primary"></i></a>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/integrasite.png') }}" alt="Site Integra Campinas" class="img-projects img-fluid img-thumbnail">
                </div>
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/transportepacheco site.png') }}" alt="Site Transportes Pacheco" class="img-projects img-fluid img-thumbnail">
                </div>
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/glpcontroledepragas site.png') }}" alt="Site GLP Controle de Pragas" class="img-projects img-fluid img-thumbnail">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/Freitas e Oliveira Advogados Site.png') }}" alt="Site Freitas e Oliveira Advogados" class="img-projects img-fluid img-thumbnail">
                </div>
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/suamarcaonline site.png') }}" alt="Site Sua Marca Online" class="img-projects img-fluid img-thumbnail">
                </div>
                <div class="col-3 container-img m-3 p-0 border border-danger rounded">
                    <img src="{{ asset('img/barelaemerick site.png') }}" alt="Site Barela Emerick" class="img-projects img-fluid img-thumbnail">
                </div>
            </div>
        </div>
        
        
    </section>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>