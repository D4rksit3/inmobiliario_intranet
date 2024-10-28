<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Propiedad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: white;
            padding: 1rem;
        }
        header h1 {
            margin: 0;
            text-align: center;
        }
        header nav ul {
            list-style: none;
            padding-left: 0;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        header nav ul li {
            margin-right: 20px;
        }
        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }
        header nav ul li a:hover {
            text-decoration: underline;
        }
        form {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <header>
        <h1>Agregar Nueva Propiedad</h1>
        <nav>
            <ul>
                <li><a href="/public/propiedades" class="btn btn-outline-light">Volver a Propiedades</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/public/propiedades/store" method="POST">
                    <div class="form-group">
                        <label for="tipo">Tipo de Propiedad:</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" required>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="estado" name="estado">
                            <option value="Disponible">Disponible</option>
                            <option value="Vendido">Vendido</option>
                            <option value="Alquilado">Alquilado</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Guardar Propiedad</button>
                </form>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
