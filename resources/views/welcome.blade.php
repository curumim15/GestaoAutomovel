<!DOCTYPE html>
<html lang="en">
<head>
    <title>Oficina</title>
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/126/126391.png" type="image/gif" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
    <script type="text/javascript" src="/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('welcome')}}">Oficina</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('agendas')}}">Marcações</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('produtos')}}">Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5" >
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Oficina Mecanica</h1>
                                <p class="lead fw-normal text-white-50 mb-4">A Trabalhar desde 1970</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://office.builderall.com/upload_clientes/66608/userfiles/image/Mecânica%20em%20Foz%20do%20Iguaçu.%20substitucoes%20de%20pecas.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Reparamos e Vedemos o que o seu Carro deseja "</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://png.pngtree.com/png-vector/20190726/ourlarge/pngtree-car-workshop-icon-design-vector-png-image_1591239.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Oficina Mecanica</div></div>
                    <div class="col-auto">
                        <a class="link-light small">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
