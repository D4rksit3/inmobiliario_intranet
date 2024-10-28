<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios - Inmobiliaria SOL DE ORO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white text-center p-3">
        <h1>Gestión de Anuncios</h1>
    </header>

    <div class="container mt-4">
        <h2>Listado de Anuncios</h2>
        <a href="/anuncios/create" class="btn btn-success mb-4">Crear Nuevo Anuncio</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Propiedad</th>
                    <th>Descripción</th>
                    <th>Fecha Publicación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($anuncios as $anuncio) : ?>
                    <tr>
                        <td><?= $anuncio['id'] ?></td>
                        <td><?= $anuncio['propiedad'] ?></td>
                        <td><?= $anuncio['descripcion'] ?></td>
                        <td><?= $anuncio['fecha_publicacion'] ?></td>
                        <td><?= $anuncio['estado'] ?></td>
                        <td>
                            <a href="/anuncios/edit/<?= $anuncio['id'] ?>" class="btn btn-primary">Editar</a>
                            <a href="/anuncios/delete/<?= $anuncio['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
