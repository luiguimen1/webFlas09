<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/miEstilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/additional-methods.js" type="text/javascript"></script>
        <script src="js/localization/messages_es.js" type="text/javascript"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
        <script src="js/MiLogica.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./">CetColsubsidio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Profesor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" id="estudiante">Estudiante</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" id="formulario">Formulario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ayuda</a>
                        </li>
                    </ul>
                    <!--
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>
        <div class="container" id="SuperContenido">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="list-group">
                        <li id="mision" class="list-group-item d-flex justify-content-between align-items-center mano">
                            Misión
                                <span class="badge badge-primary badge-pill">--></span>
                        </li>
                        <li id="vision" class="list-group-item d-flex justify-content-between align-items-center mano">
                           Visión
                                <span class="badge badge-primary badge-pill">--></span>
                        </li>
                        <li id='politica' class="list-group-item d-flex justify-content-between align-items-center mano">
                           Politicas
                                <span class="badge badge-primary badge-pill">--></span>
                        </li>
                        <li id='AgrPer' class="list-group-item d-flex justify-content-between align-items-center mano">
                           Agregar
                                <span class="badge badge-primary badge-pill">--></span>
                        </li>
                        
                        <li id='LisPer' class="list-group-item d-flex justify-content-between align-items-center mano">
                           Listar
                                <span class="badge badge-primary badge-pill">--></span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9" id="contenido">

                    <div class="jumbotron">
                        <h1 class="display-3">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-dismissible alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-dismissible alert-primary">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
