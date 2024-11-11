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
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">
                <img src="\proyecto\logo.png" alt="Start Bootstrap"
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
    
    
    
    <!-- Cart Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder mb-4" style="color: #332F24;">Tu Carrito</h2>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Drosera Homaccord Gotas 30ml Heel</td>
                        <td>
                            <div class="carrito-actions d-flex justify-content-center align-items-center">
                                <input type="number" value="1" min="1" style="width: 60px; text-align: center; border: 1px solid #ced4da; border-radius: 4px; padding: 5px;">
                                <button class="btn btn-primary btn-sm ms-2">
                                    <i class="bi bi-arrow-repeat"></i> Actualizar
                                </button>
                                <button class="btn btn-danger btn-sm ms-2">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </div>
                        </td>
                        <td>₡9000</td>
                    </tr>
                    <tr>
                        <td>Nux Vomica 9 CH Glóbulos 4g Boiron</td>
                        <td>
                            <div class="carrito-actions d-flex justify-content-center align-items-center">
                                <input type="number" value="2" min="1" style="width: 60px; text-align: center; border: 1px solid #ced4da; border-radius: 4px; padding: 5px;">
                                <button class="btn btn-primary btn-sm ms-2">
                                    <i class="bi bi-arrow-repeat"></i> Actualizar
                                </button>
                                <button class="btn btn-danger btn-sm ms-2">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </div>
                        </td>
                        <td>₡3000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total:</td>
                        <td class="fw-bold">₡12000</td>
                    </tr>
                </tfoot>
            </table>
            <!-- Botones de Pago -->
            <div class="text-end">
                <a href="envio.php" class="btn btn-success btn-lg me-2" style="background-color: #28a745; border-color: #28a745; color: white;">
                    Envío a Casa
                </a>
                <a href="pagoLocal.php" class="btn btn-success btn-lg" style="background-color: #28a745; border-color: #28a745; color: white;">
                    Pago en Local
                </a>
            </div>
        </div>
    </section>
    
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Farmacia Nacional de Homeopatia 2024</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
