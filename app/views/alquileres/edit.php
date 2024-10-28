<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alquiler</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    header {
        background-color: #2b2b37;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2rem;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 10px 0;
        text-align: center;
    }

    nav ul li {
        display: inline;
        margin: 0 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    main {
        max-width: 800px;
        margin: 30px auto;
        background: white;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        width: 100%;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 20px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    textarea {
        height: 150px;
        resize: none;
    }

    @media (max-width: 600px) {
        main {
            margin: 10px;
        }

        header h1 {
            font-size: 1.5rem;
        }
    }
</style>
</head>
<body>
<header>
        <h1>Editar alquiler</h1>
        <nav>
            <ul>
                <li><a href="/public/alquileres" class="btn btn-outline-light">Volver a alquiler</a></li>
            </ul>
        </nav>
    </header>

    <div class="container mt-4">
        <form action="/public/alquileres/update/<?= isset($alquiler['ID_Alquiler']) ? $alquiler['ID_Alquiler'] : ''; ?>" method="POST">
            <div class="form-group">
                <label for="id_propiedad">ID Propiedad</label>
                <input type="text" class="form-control" id="id_propiedad" name="id_propiedad" value="<?= isset($alquiler['ID_Propiedad']) ? $alquiler['ID_Propiedad'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="id_cliente">ID Cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" value="<?= isset($alquiler['ID_Cliente']) ? $alquiler['ID_Cliente'] : ''; ?>" required>
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
