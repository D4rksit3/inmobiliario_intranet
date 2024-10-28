<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nueva Venta</title>
    <!-- Importando Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Registrar Nueva Venta</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/public/ventas/index">Volver al Listado de Ventas</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="container mt-4">
        <form action="/public/ventas/guardar" method="POST">
            <div class="form-group">
                <label for="id_propiedad">ID Propiedad</label>
                <input type="text" class="form-control" id="id_propiedad" name="id_propiedad" required>
            </div>

            <div class="form-group">
                <label for="id_cliente">ID Cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de Venta</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="precio_venta">Precio de Venta</label>
                <input type="number" class="form-control" id="precio_venta" name="precio_venta" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado de la Venta</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="pendiente">Pendiente</option>
                    <option value="completada">Completada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Venta</button>
        </form>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>

    <!-- Importando Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
