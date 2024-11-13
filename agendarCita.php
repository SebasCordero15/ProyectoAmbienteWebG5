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
    <?php include 'layout/nav.php'; ?>

      <!-- Contenido principal -->
      <div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="formularioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formularioModalLabel">Formulario de Cita Médica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                
                <form action="procesar_formulario.php" method="post">
                    <div class="form-group">
                        <label for="fechaCita">Fecha de cita</label>
                        <input type="date" id="fechaCita" name="fechaCita" class="form-control" placeholder="Selecciona la fecha de la cita">
                    </div>
                    <div class="form-group">
                        <label for="horaCita">Hora de la cita</label>
                        <select id="horaCita" name="horaCita" class="form-control">
                            <option value="07:00">07:00 AM</option>
                            <option value="07:30">07:30 AM</option>
                            <option value="08:00">08:00 AM</option>
                            <option value="08:30">08:30 AM</option>
                            <option value="09:00">09:00 AM</option>
                            <option value="09:30">09:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">01:00 PM</option>
                            <option value="13:30">01:30 PM</option>
                            <option value="14:00">02:00 PM</option>
                            <option value="14:30">02:30 PM</option>
                            <option value="15:00">03:00 PM</option>
                            <option value="15:30">03:30 PM</option>
                            <option value="16:00">04:00 PM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingresa tu apellido">
                    </div>
                    <div class="form-group">
                        <label for="genero">Género</label>
                        <select id="genero" name="genero" class="form-control">
                            <option value="" selected disabled>Selecciona tu género</option>
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doctor">Doctor</label>
                        <select id="doctor" name="doctor" class="form-control">
                            <option value="" selected disabled>Selecciona un Doctor</option>
                            <option value="dr1">Dr. Carlos Ramirez Mora</option>
                            <option value="dr2">Dr. Manuel Pereira Solis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingresa tu teléfono">
                    </div>
                    <div class="form-group">
                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección exacta</label>
                        <textarea id="direccion" name="direccion" rows="4" class="form-control" placeholder="Ingresa tu dirección exacta"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <br>
                    <div class="container" >
                <div class="row">
                    <div class="col">
                    <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal" aria-label="Cerrar">Volver</button>
                   </div>
                    <div class="col">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Enviar cita</button>
                    </div>
                </div>
                
                </div>

                   
                       
                    
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="citas.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
