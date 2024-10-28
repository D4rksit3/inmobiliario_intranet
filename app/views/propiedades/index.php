<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Propiedades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Listado de Propiedades</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/public/intranet/dashboard">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/public/propiedades/create">Agregar Nueva Propiedad</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container mt-4">
        <!-- Mostrar el mensaje de éxito o error -->
        <?php
        session_start();
        if (isset($_SESSION['mensaje'])): ?>
            <div class="alert <?php echo strpos($_SESSION['mensaje'], 'Error') === false ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                <?php
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']); // Eliminar el mensaje después de mostrarlo
                ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Dirección</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($propiedades as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad['ID_Propiedad']; ?></td>
                    <td><?php echo $propiedad['Tipo']; ?></td>
                    <td><?php echo $propiedad['Dirección']; ?></td>
                    <td>S/ <?php echo number_format($propiedad['Precio'], 2); ?></td>
                    <td><?php echo $propiedad['Estado']; ?></td>
                    <td>
                        <a href="propiedades/edit/<?php echo $propiedad['ID_Propiedad']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="propiedades/delete/<?php echo $propiedad['ID_Propiedad']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta propiedad?');">Eliminar</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
