<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventas</title>
    <!-- Importando Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Listado de Ventas</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/public/intranet/dashboard">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public/ventas/create">Registrar Nueva Venta</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Venta</th>
                        <th>ID Propiedad</th>
                        <th>ID Cliente</th>
                        <th>Fecha</th>
                        <th>Precio de Venta</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($ventas)): ?>
                        <?php foreach ($ventas as $venta): ?>
                        <tr>
                            <td><?php echo $venta['ID_Venta']; ?></td>
                            <td><?php echo $venta['ID_Propiedad']; ?></td>
                            <td><?php echo $venta['ID_Cliente']; ?></td>
                            <td><?php echo $venta['Fecha']; ?></td>
                            <td>S/ <?php echo number_format($venta['Precio_Venta'], 2); ?></td>
                            <td><?php echo $venta['Estado']; ?></td>
                            <td>
                                <a href="/public/ventas/delete/<?php echo $venta['ID_Venta']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta venta?');">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No hay ventas registradas.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
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
