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
                            <li class="nav-item"><a class="nav-link active" href="{{route('contacto')}}">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="py-5" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.2) 100%), url(https://i.pinimg.com/originals/14/02/c6/1402c66a2142e8dfd93fa8b8735ae569.jpg); background-repeat: no-repeat;">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder"style="color:#ffffff">Contactos</h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                <form style="margin: 20px" action ="{{route('contactPost')}}" method="POST" >
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label style="color:black; text-shadow: 2px black;" for="exampleFormControlInput1">Nome</label>
                                            <input type="text"  name= "nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" name= "email" class="form-control" id="exampleFormControlInput1" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Telefone</label>
                                            <input type="number" name= "telefone" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descreva o problema</label>
                                            <textarea  name= "mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensagem"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary" style="margin:40px;">Enviar</button>
                                    </div>
                                </form>
                                        <div class="text-center mb-5">
                                            <p style="color:#000000">Após submeter, Espere ser contactado</p>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
         <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
