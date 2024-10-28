<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificamos si el usuario está autenticado
if (!isset($_SESSION['authenticated'])) {
    header('Location: /public/intranet/login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet - Inmobiliaria SOL DE ORO</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: #ffc107;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .header, .footer {
            background-color: #343a40;
            color: #fff;
        }
        .main-content {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        .welcome-text {
            margin-bottom: 30px;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header class="header text-center p-4">
        <h1>Panel de Administración - Inmobiliaria SOL DE ORO</h1>
        <a href="logout" class="btn btn-danger mt-2">Cerrar Sesión</a>
    </header>
    
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 sidebar p-3">
                <h4 class="text-center">Menú</h4>
                <a class="nav-link" href="/public/propiedades">Gestión de Propiedades</a>
                <a class="nav-link" href="/public/clientes">Gestión de Clientes</a>
                <a class="nav-link" href="/public/ventas">Gestión de Ventas</a>
                <a class="nav-link" href="/public/alquileres">Gestión de Alquileres</a>
                <a class="nav-link" href="/public/anuncios">Gestión de Anuncios</a>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 py-4">
                <div class="main-content">
                    <h2 class="text-center">Bienvenido a la Intranet</h2>
                    <p class="text-center welcome-text">Selecciona una opción en el menú para empezar a gestionar las propiedades, clientes, ventas, alquileres, y anuncios de la inmobiliaria.</p>

                    <div class="row">
                        <!-- Example Cards for quick access -->
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-center p-4">
                                <h5 class="card-title">Propiedades</h5>
                                <p class="card-text">Administra las propiedades disponibles para venta y alquiler.</p>
                                <a href="/public/propiedades" class="btn btn-primary">Ir a Propiedades</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-center p-4">
                                <h5 class="card-title">Clientes</h5>
                                <p class="card-text">Gestiona la información de tus clientes.</p>
                                <a href="/public/clientes" class="btn btn-primary">Ir a Clientes</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-center p-4">
                                <h5 class="card-title">Ventas</h5>
                                <p class="card-text">Gestiona y visualiza el historial de ventas.</p>
                                <a href="/public/ventas" class="btn btn-primary">Ir a Ventas</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-center p-4">
                                <h5 class="card-title">Alquileres</h5>
                                <p class="card-text">Administra las propiedades en alquiler y contratos.</p>
                                <a href="/public/alquileres" class="btn btn-primary">Ir a Alquileres</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-center p-4">
                                <h5 class="card-title">Anuncios</h5>
                                <p class="card-text">Gestiona y publica anuncios para la venta o alquiler.</p>
                                <a href="/public/anuncios" class="btn btn-primary">Ir a Anuncios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="footer text-center p-3 mt-4">
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
