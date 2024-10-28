<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alquiler</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white text-center p-3">
        <h1>Editar Alquiler</h1>
    </header>

    <div class="container mt-4">
        <form action="/public/alquileres/update/<?= isset($alquiler['ID_Alquiler']) ? $alquiler['ID_Alquiler'] : ''; ?>" method="POST">
            <!-- Desplegable de Propiedades -->
            <div class="form-group">
                <label for="id_propiedad">Propiedad</label>
                <select class="form-control" id="id_propiedad" name="id_propiedad" required>
                    <option value="">Selecciona una propiedad</option>
                    <?php foreach ($propiedades as $propiedad): ?>
                        <option value="<?= $propiedad['ID_Propiedad'] ?>" <?= isset($alquiler['ID_Propiedad']) && $alquiler['ID_Propiedad'] == $propiedad['ID_Propiedad'] ? 'selected' : ''; ?>>
                            <?= $propiedad['Dirección'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Desplegable de Clientes -->
            <div class="form-group">
                <label for="id_cliente">Cliente</label>
                <select class="form-control" id="id_cliente" name="id_cliente" required>
                    <option value="">Selecciona un cliente</option>
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente['ID_Cliente'] ?>" <?= isset($alquiler['ID_Cliente']) && $alquiler['ID_Cliente'] == $cliente['ID_Cliente'] ? 'selected' : ''; ?>>
                            <?= $cliente['NombreCompleto'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?= isset($alquiler['Fecha_Inicio']) ? $alquiler['Fecha_Inicio'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="fecha_fin">Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?= isset($alquiler['Fecha_Fin']) ? $alquiler['Fecha_Fin'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="precio_alquiler">Precio Alquiler</label>
                <input type="number" class="form-control" id="precio_alquiler" name="precio_alquiler" value="<?= isset($alquiler['Precio_Alquiler']) ? $alquiler['Precio_Alquiler'] : ''; ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado">
                    <option value="Activo" <?= isset($alquiler['Estado']) && $alquiler['Estado'] == 'Activo' ? 'selected' : ''; ?>>Activo</option>
                    <option value="Inactivo" <?= isset($alquiler['Estado']) && $alquiler['Estado'] == 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
