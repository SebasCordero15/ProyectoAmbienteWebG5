<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">
                <img src="\ProyectoAmbienteWebG5\logo.png" alt="Start Bootstrap" style="height: auto; width: 100px;">
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
                        <a href="#!" class="btn"
                            style="background-color: #28a745; color: white; font-weight: bold; padding: 8px 16px; border-radius: 5px; margin-left: 10px; text-align: center;">
                            Agendar Cita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="btn"
                            style="background-color: #28a745; color: white; font-weight: bold; padding: 8px 16px; border-radius: 5px; margin-left: 10px; text-align: center;">
                            Buscar Cita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="btn"
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
                            <li><a class="dropdown-item" href="#!">Iniciar Sesion</a></li>
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


    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <!-- Formulario de Envío a Casa -->
            <h3 class="fw-bold mt-4" style="color: #332F24;">Formulario de Envío a Casa</h3>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre completo"
                        required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección de Envío</label>
                    <textarea class="form-control" id="direccion" rows="3" placeholder="Ingrese su dirección completa"
                        required></textarea>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono de Contacto</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su número de teléfono"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Método de Pago</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="metodoPago" id="pagoTarjeta" value="tarjeta"
                            required>
                        <label class="form-check-label" for="pagoTarjeta">Tarjeta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="metodoPago" id="pagoEfectivo"
                            value="efectivo" required>
                        <label class="form-check-label" for="pagoEfectivo">Efectivo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="metodoPago" id="pagoSimpe" value="simpe"
                            required>
                        <label class="form-check-label" for="pagoSimpe">Sinpe/Transferencia</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Confirmar Envío</button>
            </form>
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Farmacia Nacional de Homeopatia 2024</p>
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>