<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">
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
                        <a href="buscarCita.php" class="btn"
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
        <h2 class="mb-4 text-center">Agendar Cita</h2>
        <form action="agendarCita.php" method="POST">
            <div class="mb-3">
                <label for="nombrePaciente" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" placeholder="Ingrese su nombre completo">
            </div>
            <div class="mb-3">
                <label for="cedulaPaciente" class="form-label">Cédula</label>
                <input type="text" class="form-control" id="cedulaPaciente" name="cedulaPaciente" placeholder="Ingrese su número de cédula">
            </div>
            <div class="mb-3">
                <label for="fechaCita" class="form-label">Fecha de la Cita</label>
                <input type="date" class="form-control" id="fechaCita" name="fechaCita">
            </div>
            <div class="mb-3">
                <label for="horaCita" class="form-label">Hora de la Cita</label>
                <input type="time" class="form-control" id="horaCita" name="horaCita">
            </div>
            <button type="submit" class="btn btn-success w-100">Agendar Cita</button>
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
