<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .bg-verdeagua {
            background-color: #148F77;
        }

        .bg-agua {
            background-color: #A2D9CE;
        }
    </style>
    <title>Gestion de Test</title>
</head>

<body>

    <div class="container">
        <div class="row pt-3">
            <!-- Inicio de barra de navbar -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-verdeagua">
                    <a class="navbar-brand" href="#">Avanza</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Iniciar sesión</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Test</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Test 1</a>
                                    <a class="dropdown-item" href="#">Test 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Ingresa tu busqueda">
                            <button class="btn btn-warning text-dark my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>
            </div>
            <!-- Termino de navbar -->
        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <!-- Inicio descripcion test -->
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-head bg-warning text-center">
                        <h4 class="card-title pt-2 ml-2">Gestion de Test</h4>
                    </div>
                    <div class="card-body text-left bg-agua">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <form action="#">
                                        <label for="tipodetest">Seleccione un tipo de test:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="tipodetest">Tipo</label>
                                            </div>
                                            <select class="custom-select" id="tipodetest" onChange="valTipo();" onFocus="valTipo();">
                                                <option selected value="0">Seleccione...</option>
                                                <option value="1">Personalidad</option>
                                                <option value="2">Psico-social</option>
                                                <option value="3">Interes Profesional</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="titest">Titulo del Test</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Descripcion</label>
                                            <textarea type="text" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="npreg">Seleccione la cantidad de preguntas:</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="form-control btn btn-warning">Confirmar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Termino descripcion test -->
            <!-- Inicio creacion preguntas -->
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-head bg-warning text-center">
                        <h4 class="card-title pt-2 ml-2">Preguntas y respuestas</h4>
                    </div>
                    <div class="card-body text-left bg-agua">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <form action="#">
                                        <label for="titest">Ingrese la pregunta:</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="preg" id="preg" cols="30" rows="2"></textarea>
                                        </div>
                                        <label for="imgpreg">Selecciones una imagen o ruta de imagen.</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Ingrese ruta de la imagen" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-info" type="button" id="button-addon2">Examinar</button>
                                            </div>



                                        </div>
                                        <div class="form-group ">
                                            <a href="#" class="form-control btn btn-outline-danger">Eliminar Imagen</a>
                                        </div>
                                        <label for="respco">ingrese las respuestas posibles y elija la alternativa correcta:</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="" id="resp1" name="radioresp">Alternativa a:
                                            <input type="text" class="form-control" id="resp1">
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="" id="resp2" name="radioresp">Alternativa b:
                                            <input type="text" class="form-control" id="resp2">
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="" id="resp3" name="radioresp">Alternativa c:
                                            <input type="text" class="form-control" id="resp3">
                                        </div>

                                        <div class="form-group mt-3">
                                            <a href="#" class="form-control btn btn-warning">Siguiente</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Termino de creacion de preguntas -->
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">Quiénes somos</h3>
                    <h5 style="text-align:center">Somos un grupo de estudiantes de Ingeniería en Informática que buscan realizar
                        un proyecto enfocado en lo que consideramos más importante en nuestras etapas de vida, la educación. </h5>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">Redes Sociales</h3>
                    <div class="text-center">
                        <a href="#"><img src="icon/facebook.png" width="64" height="64" alt="" /></a>
                        <a href="#"><img src="icon/twitter.png" width="64" height="64" alt="" /></a>
                        <a href="#"><img src="icon/instagram.png" width="64" height="64" alt="" /></a>
                        <a href="#"><img src="icon/google-plus.png" width="64" height="64" alt="" /></a>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">Recibe Nuestra Información</h3>
                    <form>
                        <div class="form-group col-lg-9 col-md-8 col-sm-10 col-xs-10">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-success">Suscribir<br>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Copyright © All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

		
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/Validaciones.js"></script>
</body>

</html>