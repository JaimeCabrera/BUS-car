<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Rutas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
<<<<<<< HEAD
        <link rel="stylesheet" href="css/stilos.css">
        
=======
        <link rel="stylesheet" href="css/stilos.css"
>>>>>>> a8eafc6039d38b6aadba738b6d3d55c2a90c89f8
        <script type="text/javascript" src="js/bus.js"></script>
        <script src="js/mapbox-gl.js"></script>
        <link href="css/mapbox-gl.css" rel='stylesheet' />
        <style>
            /*body { margin:-1%; padding:30%; }*/
            #map { position:relative;; top:auto; bottom:auto; width:71%;  }
            #pagina3 {margin-left: 0%;}
            #Lista{    margin-left: 68%;  position: absolute;}

        </style>
    </head>
    <body >
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
                        <a class="navbar-brand" href="index.php">BusLineMap</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav">
                            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="rutas.php">Ver todas las rutas</a></li>
                            <li><a href="horarios.php">Ver los Horarios</a></li>
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


        <div id="pagina3" class="container">
            <h4>Rutas de los Buses Urbanos de la Ciudad de Loja</h4>
            <div id="Lista">
                <h3 style="color:#337ab7">RUTAS ALIMENTADORAS</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Linea 1</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Esta pasa por su casa .</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Línea 3</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Tome esta linea ahora y va directo al chongo.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Línea 4</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Informacion: Pasa por Esteban Godoy, Julio Ordoñes, El VAlle, Epoca</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>

        </div>
        <!--fin de la pagina-->
        <br>
        <!--Pie de la PAgina-->


        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3Fyb290IiwiYSI6ImNqZGx6OGh1cjBmcjMzMm85MGw0Y3hkaXkifQ.aUDBTOBjCfRtDhKGWfGNcQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v9',
                center: [-79.2052894, -3.9954844],
                zoom: 13.4
            });

            map.on('load', function () {
                map.addLayer({
                    "id": "points",
                    "type": "symbol",
                    "source": {
                        "type": "geojson",
                        "data": {
                            "type": "FeatureCollection",
                            "features": [{
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [-79.206405, -3.999535]
                                    },
                                    "properties": {
                                        "title": "Parada",
                                        "icon": "bus"
                                    }
                                },
                                {
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [-79.206405, -3.999535]
                                    },
                                    "properties": {
                                        "title": "Parada",
                                        "icon": "bus"
                                    }
                                }, {
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [-79.202505, -3.984590]
                                    },
                                    "properties": {
                                        "title": "Parada",
                                        "icon": "bus"
                                    }
                                }, {
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [-79.204590, -3.989356]
                                    },
                                    "properties": {
                                        "title": "Parada",
                                        "icon": "bus"
                                    }
                                }, {
                                    "type": "Feature",
                                    "geometry": {
                                        "type": "Point",
                                        "coordinates": [-79.205533, -3.994257]
                                    },
                                    "properties": {
                                        "title": "Parada",
                                        "icon": "bus"
                                    }
                                }]
                        }
                    },
                    "layout": {
                        "icon-image": "{icon}-15",
                        "text-field": "{title}",
                        "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
                        "text-offset": [0, 0.6],
                        "text-anchor": "top"
                    }
                });

                map.addLayer({
                    "id": "route",
                    "type": "line",
                    "source": {
                        "type": "geojson",
                        "data": {
                            "type": "Feature",
                            "properties": {},
                            "geometry": {
                                "type": "LineString",
                                "coordinates": [
                                    [-79.202592, -3.984031],
                                    [-79.202541, -3.984213],
                                    [-79.202505, -3.984590],
                                    [-79.202456, -3.985064],
                                    [-79.202503, -3.985462],
                                    [-79.20259, -3.985896],
                                    [-79.202709, -3.986183],
                                    [-79.202769, -3.986450],
                                    [-79.202868, -3.986836],
                                    [-79.202965, -3.987192],
                                    [-79.203035, -3.987387],
                                    [-79.203217, -3.987887],
                                    [-79.203375, -3.988200],
                                    [-79.203418, -3.988280],
                                    [-79.203713, -3.988705],
                                    [-79.203938, -3.988954],
                                    [-79.204010, -3.989040],
                                    [-79.204305, -3.989246],
                                    [-79.204367, -3.989281],
                                    [-79.204590, -3.989356],
                                    [-79.204649, -3.989367],
                                    [-79.204727, -3.989554],
                                    [-79.204966, -3.990006],
                                    [-79.204924, -3.989941],
                                    [-79.205039, -3.990182],
                                    [-79.205195, -3.990500],
                                    [-79.205284, -3.990709],
                                    [-79.205566, -3.991266],
                                    [-79.205797, -3.991758],
                                    [-79.205792, -3.991943],
                                    [-79.205754, -3.992401],
                                    [-79.205679, -3.993043],
                                    [-79.205593, -3.993709],
                                    [-79.205582, -3.993837],
                                    [-79.205571, -3.994022],
                                    [-79.205533, -3.994257],
                                    [-79.205509, -3.994533],
                                    [-79.205646, -3.994552],
                                    [-79.205802, -3.994573],
                                    [-79.206068, -3.994557],
                                    [-79.206500, -3.994552],
                                    [-79.206813, -3.994564],
                                    [-79.206851, -3.994579],
                                    [-79.206929, -3.994614],
                                    [-79.206965, -3.994651],
                                    [-79.206924, -3.995461],
                                    [-79.206919, -3.995528],
                                    [-79.206788, -3.996612],
                                    [-79.206670, -3.997447],
                                    [-79.206589, -3.998115],
                                    [-79.206535, -3.998503],
                                    [-79.206455, -3.999180],
                                    [-79.206405, -3.999535],
                                    [-79.206341, -4.000038],
                                    [-79.206287, -4.000490],
                                    [-79.206244, -4.001030],
                                    [-79.206206, -4.001427],
                                ]
                            }
                        }
                    },
                    "layout": {
                        "line-join": "round",
                        "line-cap": "round"
                    },
                    "paint": {
                        "line-color": "rgb(255, 0, 0)",
                        "line-width": 3
                    }
                });
            });
        </script>
        <div class="panel-footer" id="footer">
            <h4>Universidad Nacional de Loja</h4>
            <h5>Carrera de Ingeniería en Sistemas</h5>
            <h5></h5>
        </div>
    </body>
</html>
