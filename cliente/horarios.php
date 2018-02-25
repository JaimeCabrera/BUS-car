<!DOCTYPE html>
<html>
    <head>
        <title>Rutas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stilos.css">
        <script type="text/javascript" src="js/bus.js"></script>
    </head>
    <body oncontextmenu="return true" onkeydown="return true">
        <br>
        <div class="container-fluid">            
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">BusLineMap</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav">
                            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="rutas.php">Ver todas las rutas</a></li>
                            <li class="active"><a href="horarios.php">Ver los Horarios</a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                        </form>                       
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>    
        <!--pagina-->       
        <!--Pagina con el mapa de las ubicaciones de las paradas-->
        <div id="pagina4" class="container">
            <h4 style="color:#127f12;"><p class="text-center">Lista de horarios de los BUSES de transporte urbano de Loja</p> </h4>           
            <div class="panel panel-default">
                <div class="panel-body">
                   <?php
                    include'php/consultarRutas.php';
                   ?>
                </div>
            </div>
        </div>
        <!--fin de la pagina-->
        <br>
        <!--Pie de la PAgina-->
        <div class="panel-footer navbar-fixed-bottom" id="footer">
            <h4>Universidad Nacional de Loja</h4>
            <h5>Carrera de Ingeniería en Sistemas</h5>
            <h5></h5>
        </div>
    </body>
</html>
