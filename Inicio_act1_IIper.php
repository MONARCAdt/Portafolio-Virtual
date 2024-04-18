<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>INICIO</title>
        <link rel="icon" type="image/x-icon" href="assets/portafolio.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles(II-1).css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">PORTAFOLIO VIRTUAL</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="inicio.html">INICIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="info.html">INFO.</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">TRABAJOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="page-section" id="punto1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PUNTO 1</h2>
                    <h3 class="section-subheading text-muted">Realizar una aplicación en PhP que capture UN valor numérico en un formulario con un campo
                        de texto, al presionar un botón tipo “submit” y retornar un mensaje indicando si el número es
                        positivo o negativo en una etiqueta.
                        Recuerde realizar en los estilos correspondientes en un archivo .css, El mensaje de “número
                        positivo” debe tener fondo verde y letra azul, el mensaje de “número negativo” debe tener fondo
                        rojo letra amarilla.</h3>
                </div>  
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="input-group input-group-lg">
                            <br><span class="input-group-text" name="numero" id="inputGroup-sizing-lg">NUMERO: </span>
                            <input type="text" id="numero" name="numero" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                          </div>
                          <button type="submit" class="btn btn-warning" value="Calcular">CALCULAR</button>
                </form>
                          <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $numero = (int) $_POST['numero'];
                            if ($numero > 0) {
                                echo '<div class="positivo"><h2>El número es positivo.</h2></div>';
                            } elseif ($numero < 0) {
                               echo '<div class="negativo"><h2>El número es negativo.</h2></div>';
                             } else {
                                 echo '<div class="cero"><h2>El número es 0.</h2></div>';
                             }
                           }
                         ?>
                    </div>
                </div>
            </div>
        </section>
    


        <section class="page-section" id="punto1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PUNTO 2</h2>
                    <h3 class="section-subheading text-muted">Realizar una aplicación que determine si un número es par o impar empleando la operación MODULO.</h3>
                </div>  
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="input-group input-group-lg">
                            <br><span class="input-group-text" name="numero" id="inputGroup-sizing-lg">INGRESE NUMERO: </span>
                            <input type="text" id="numero" name="numero" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                          </div>
                          <button type="submit" class="btn btn-warning" value="Calcular">CALCULAR</button>
                </form>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                     $numero = $_POST['numero'];
                        if (($numero % 2) == 0) {
                            echo "<div class='par'><h1>el numero es par</h1></div>";
                        } else {
                            echo "<div class='inpar'><h1>el numero es inpar</h1></div>";
                        }
                    }
                ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="page-section" id="punto1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PUNTO 3</h2>
                    <h3 class="section-subheading text-muted">Realiza una mejora a la actividad uno, el programa debe indicar si se ha digitado el número CERO.</h3>
                </div>  
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="input-group input-group-lg">
                            <br><span class="input-group-text" name="numero" id="inputGroup-sizing-lg">NUMERO: </span>
                            <input type="text" id="numero" name="numero" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                          </div>
                          <button type="submit" class="btn btn-warning" value="Calcular">CALCULAR</button>
                </form>
                          <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $numero = (int) $_POST['numero'];
                            if ($numero > 0) {
                                echo '<div class="positivo"><h2>El número es positivo.</h2></div>';
                            } elseif ($numero < 0) {
                               echo '<div class="negativo"><h2>El número es negativo.</h2></div>';
                             } else {
                                 echo '<div class="cero"><h2>El número es 0.</h2></div>';
                             }
                           }
                         ?>
                    </div>
                </div>
            </div>
        </section>


        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>