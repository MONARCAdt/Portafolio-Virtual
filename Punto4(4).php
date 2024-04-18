<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PUNTO 4</title>
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
            <center><h1>Calculadora de áreas</h1>

<form method="post" action="area.php">
    <h2>Cuadrado</h2>
    <label>Lado:</label>
    <input type="number" name="ladoCuadrado" required>
    <br>

    <h2>Rectángulo</h2>
    <label>Base:</label>
    <input type="number" name="baseRectangulo" required>
    <br>
    <label>Altura:</label>
    <input type="number" name="alturaRectangulo" required>
    <br>

    <h2>Triángulo</h2>
    <label>Base:</label>
    <input type="number" name="baseTriangulo" required>
    <br>
    <label>Altura:</label>
    <input type="number" name="alturaTriangulo" required>
    <br>

    <h2>Círculo</h2>
    <label>Radio:</label>
    <input type="number" name="radioCirculo" required>
    <br>

    <input type="submit" value="Calcular">
</form></center>


<center><?php
function areaCuadrado($lado) {
    return $lado * $lado;
}
function areaRectangulo($base, $altura) {
    return $base * $altura;
}
function areaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}
function areaCirculo($radio) {
    return 3.14159265358979323846 * $radio * $radio;
}

$ladoCuadrado = $_POST['ladoCuadrado'];
$baseRectangulo = $_POST['baseRectangulo'];
$alturaRectangulo = $_POST['alturaRectangulo'];
$baseTriangulo = $_POST['baseTriangulo'];
$alturaTriangulo = $_POST['alturaTriangulo'];
$radioCirculo = $_POST['radioCirculo'];

echo "<h1>Resultados</h1>";
echo "<p>Área del cuadrado: " . areaCuadrado($ladoCuadrado) . "</p>";
echo "<p>Área del rectángulo: " . areaRectangulo($baseRectangulo, $alturaRectangulo) . "</p>";
echo "<p>Área del triángulo: " . areaTriangulo($baseTriangulo, $alturaTriangulo) . "</p>";
echo "<p>Área del círculo: " . areaCirculo($radioCirculo) . "</p>";
?></center>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<center>s