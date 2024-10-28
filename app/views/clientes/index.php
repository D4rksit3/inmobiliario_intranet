<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <!-- Importando Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Listado de Clientes</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/public/intranet/dashboard">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="/public/alquileres/create" class="btn btn-success mb-4">Registrar Nuevo Alquiler</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="container mt-4">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente['ID_Cliente']; ?></td>
                    <td><?php echo $cliente['Nombre']; ?></td>
                    <td><?php echo $cliente['Apellido']; ?></td>
                    <td><?php echo $cliente['Email']; ?></td>
                    <td><?php echo $cliente['Telefono']; ?></td>
                    <td><?php echo $cliente['Direccion']; ?></td>
                    <td>
                        <a href="/public/clientes/edit/<?php echo $cliente['ID_Cliente']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/public/clientes/delete/<?php echo $cliente['ID_Cliente']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
