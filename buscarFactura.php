<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Cita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">
                <img src="\ProyectoAmbienteWebG5\logo.png" alt="Start Bootstrap"
                    style="height: auto; width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Citas</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Facturas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#!">Usuarios</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="nav-link active" href="#!">Categorias</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="nav-link active" href="#!">Productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="agendarCita.php" class="btn"
                            style="background-color: #28a745; color: white; font-weight: bold; padding: 8px 16px; border-radius: 5px; margin-left: 10px; text-align: center;">
                            Agendar Cita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="buscarCita.php"" class="btn"
                            style="background-color: #28a745; color: white; font-weight: bold; padding: 8px 16px; border-radius: 5px; margin-left: 10px; text-align: center;">
                            Buscar Cita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="buscarFactura.php" class="btn"
                            style="background-color: #28a745; color: white; font-weight: bold; padding: 8px 16px; border-radius: 5px; margin-left: 10px; text-align: center;">
                            Buscar Factura
                        </a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <li class="nav-item dropdown me-3" style="list-style-type: none; margin: 0; padding: 0;">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Usuario</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="list-style-type: none; padding: 0; margin: 0;">
                            <li><a class="dropdown-item" href="inicioSesion.php">Iniciar Sesion</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <form class="d-flex">
                    <a href="carrito.php" class="btn" style="color: #2e2b27; border-color: #2e2b27;">
                        <i class="bi-cart-fill me-1" style="color: #2e2b27;"></i>
                        Carrito
                        <span id="cantidadCarrito" class="badge text-white ms-1 rounded-pill"
                            style="background-color: #2e2b27;">
                           0
                        </span>
                    </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>

      <!-- Contenido principal -->
      <section class="container my-5">
        <h2 class="mb-4 text-center">Buscar Factura</h2>
        <form action="buscarFactura.php" method="GET">
            <div class="mb-3">
                <label for="numeroFactura" class="form-label">Número de Factura</label>
                <input type="text" class="form-control" id="numeroFactura" name="numeroFactura" placeholder="Ingrese el número de factura">
            </div>
            <div class="mb-3">
                <label for="fechaFactura" class="form-label">Fecha de la Factura</label>
                <input type="date" class="form-control" id="fechaFactura" name="fechaFactura">
            </div>
            <button type="submit" class="btn btn-primary w-100">Buscar Factura</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Farmacia Nacional de Homeopatía 2024</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>