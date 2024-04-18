<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PUNTO 1</title>
        <link rel="icon" type="image/x-icon" href="assets/portafolio.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Portafolio Virtual</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">INICIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="info.html">INFO.</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">TRABAJOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <center><h1>Calculadora de Descuento</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="montoTotal">Monto total de la compra:</label>
        <input type="number" id="montoTotal" name="montoTotal" step="0.01" required>
        <input type="submit" value="Calcular Descuento">
    </form></center>
    <center><?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $montoTotal = $_POST["montoTotal"];
        $descuento = 0;
        $porcentajeDescuento = 0;

        if ($montoTotal >= 100) {
            $descuento = $montoTotal * 0.10;
            $porcentajeDescuento = 10;
        } elseif ($montoTotal >= 50) {
            $descuento = $montoTotal * 0.05;
            $porcentajeDescuento = 5;
        }

        $montoFinal = $montoTotal - $descuento;

        echo "<h2>Resultados:</h2>";
        echo "<p>Monto original: $" . number_format($montoTotal, 2) . "</p>";
        echo "<p>Porcentaje de descuento: " . $porcentajeDescuento . "%</p>";
        echo "<p>Monto final después de aplicar el descuento: $" . number_format($montoFinal, 2) . "</p>";
    }
    ?></center>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>