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
    <?php include 'layout/nav.php'; ?>

    <!-- Contenido principal -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Buscar Cita</h2>
        <form action="buscarCita.php" method="GET">
            <div class="mb-3">
                <label for="cedula" class="form-label">Cédula</label>
                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su número de cédula">
            </div>
            <div class="mb-3">
                <label for="fechaCita" class="form-label">Fecha de la Cita</label>
                <input type="date" class="form-control" id="fechaCita" name="fechaCita">
            </div>
            <button type="submit" class="btn btn-primary w-100">Buscar Cita</button>
        </form>
    </section>

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
