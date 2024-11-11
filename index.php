<!DOCTYPE html>
<html lang="en">

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

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Nux Vomica 9 CH Glóbulos 4g Boiron</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product price-->
                                ₡3000 
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                    
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">L72 Gotas Orales 60ml Lehning</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product reviews-->
                            
                                <!-- Product price-->
                               
                                ₡8000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod3.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">2LEID 30 Cápsulas Labolife</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product price-->
                                
                                ₡25000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod4.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Tabacum 9 CH Glóbulos 4g Boiron</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product reviews-->
                               
                                <!-- Product price-->
                                ₡3000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod5.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Drosera Homaccord Gotas 30ml Heel</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product price-->
                                
                                ₡9000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod6.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Euphorbium Gotas Nasales 20ml Heel</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product price-->
                                ₡8500
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod7.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Carduus Marianus 7 CH Glóbulos 4g Iberhome</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>
                                <!-- Product reviews-->
                                
                                <!-- Product price-->
                            
                                ₡3000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="\proyecto\prod8.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Thuya Occidentalis 6 CH Glóbulos 4g Iberhome</h5>
                                <h6 style="color: #6c757d;">Descripción del Producto</h6>

                                <!-- Product reviews-->
                               
                                <!-- Product price-->
                                ₡2500
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Farmacia Nacional de Homeopatia 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>