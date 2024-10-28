<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad</title>
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
        <h1>Editar Propiedad</h1>
        <nav>
            <ul>
                <li><a href="/public/propiedades">Volver a Propiedades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="/public/propiedades/update/<?php echo $data['ID_Propiedad']; ?>" method="POST">
            <label for="tipo">Tipo de Propiedad:</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $data['Tipo']; ?>" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $data['Dirección']; ?>" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?php echo $data['Precio']; ?>" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $data['Descripción']; ?></textarea>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="Disponible" <?php echo ($data['Estado'] == 'Disponible') ? 'selected' : ''; ?>>Disponible</option>
                <option value="Vendido" <?php echo ($data['Estado'] == 'Vendido') ? 'selected' : ''; ?>>Vendido</option>
                <option value="Alquilado" <?php echo ($data['Estado'] == 'Alquilado') ? 'selected' : ''; ?>>Alquilado</option>
            </select>

            <button type="submit">Actualizar Propiedad</button>
        </form>
    </main>
</body>
</html>
