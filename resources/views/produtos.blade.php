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
<body class="d-flex flex-column h-100" >
        <main class="flex-shrink-0 ">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('welcome')}}">Oficina</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('agendas')}}">Marcações</a></li>
                            <li class="nav-item"><a class="nav-link active" href="{{route('produtos')}}">Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="col-mod-10" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.2) 100%), url(https://i.pinimg.com/originals/14/02/c6/1402c66a2142e8dfd93fa8b8735ae569.jpg);">
                <div id="listaCasas" class="row" style="...">
                    @foreach($produtos as $produto)
                     <div class="card text-center row-cols-1" style="width: 18rem; margin: 10px;">
                        <img style="margin-top: 10px;" class="card-img-top" width="100%" src="{{ \Voyager::image($produto->img ) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->nome}}</h5>
                            <p class="card-text">Preço: {{$produto->preco}} €</p>
                            <p class="card-text">Quantidade: {{$produto->qtd}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </main>
    </body>
</html>
