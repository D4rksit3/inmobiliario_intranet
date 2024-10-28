<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquileres - Inmobiliaria SOL DE ORO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color: #2b2b37;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        thead {
            background-color: #2b2b37;
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-primary:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        footer {
            background-color: #2b2b37;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
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
                <a href="/public/alquileres/create" class="nav-link">Registrar Nuevo Alquiler</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container mt-4">
        
        
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Propiedad</th>
                    <th>Cliente</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Precio Alquiler</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($alquileres)): ?>
                    <?php foreach ($alquileres as $alquiler): ?>
                        <tr>
                            <td><?= isset($alquiler['ID_Alquiler']) ? $alquiler['ID_Alquiler'] : 'N/A'; ?></td>
                            <td><?= isset($alquiler['ID_Propiedad']) ? $alquiler['ID_Propiedad'] : 'N/A'; ?></td>
                            <td><?= isset($alquiler['ID_Cliente']) ? $alquiler['ID_Cliente'] : 'N/A'; ?></td>
                            <td><?= isset($alquiler['Fecha_Inicio']) ? $alquiler['Fecha_Inicio'] : 'N/A'; ?></td>
                            <td><?= isset($alquiler['Fecha_Fin']) ? $alquiler['Fecha_Fin'] : 'N/A'; ?></td>
                            <td><?= isset($alquiler['Precio_Alquiler']) ? 'S/ ' . number_format($alquiler['Precio_Alquiler'], 2) : 'N/A'; ?></td>
                            <td><?= isset($alquiler['Estado']) ? $alquiler['Estado'] : 'N/A'; ?></td>
                            <td>
                                <a href="/public/alquileres/edit/<?= isset($alquiler['ID_Alquiler']) ? $alquiler['ID_Alquiler'] : '#'; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="/public/alquileres/delete/<?= isset($alquiler['ID_Alquiler']) ? $alquiler['ID_Alquiler'] : '#'; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este alquiler?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">No hay alquileres registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
