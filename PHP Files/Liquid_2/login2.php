<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/Ticket-icon.png">
        <title>Signin Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/signin.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
    </head>
    <body>
        
        <div class = "container">
            <form class="form-signin" method="POST" action="" autocomplete="off" name="login">
                <h2 class="form-signin-heading">Inicio de Sesión</h2>
                <label for="inputCamion" class="sr-only">Camión</label>
                <input id="camion" class="form-control" placeholder="Número de Camión" required autofocus>
                <label for="inputViaje" class="sr-only">Password</label>
                <input id="viaje" class="form-control" placeholder="Número de Viaje" required>
                <label for="inputFecha" class="sr-only">Fecha</label>
                <output id="fechaHoy" class="col-lg-12">
                    <?php
                    function getTime(){
                        $fecha = date('d.m.Y');
                        echo "  " . $fecha;
                    }
                    echo getTime();?>
                </output>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" name="enviar">Entrar</button>
            </form>
        </div>

        <?php
        $camion = "";
        $viaje = "";
        $fechaHoy = "";


        if (isset($_POST["enviar"])){
            $camion = $_POST["camion"];
            $viaje = $_POST["viaje"];
            $fechaHoy = $_POST["fechaHoy"];
        }
        ?>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"></script>
    </body>
    
</html>