<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria - Bienvenidos</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para la imagen de fondo y oscurecida */
        #inicio {
            position: relative;
            background: url('/public/images/property_background.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        /* Capa de oscurecimiento sobre la imagen */
        #inicio::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Capa oscura */
            z-index: 1;
        }

        #inicio .content {
            position: relative;
            z-index: 2;
        }

        .btn-custom {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Navegación -->
    <header class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Inmobiliaria SOL DE ORO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#propiedades">Propiedades</a></li>
                <li class="nav-item"><a class="nav-link" href="#nosotros">Quiénes Somos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/intranet/login">Intranet</a></li>
       
            </ul>
        </div>
    </nav>
</header>



    <!-- Sección Inicio -->
    <section id="inicio">
        <div class="content">
            <h1 class="display-4">Bienvenido a Inmobiliaria SOL DE ORO</h1>
            <p class="lead">Encuentra tu hogar ideal con nosotros</p>
            <a href="#propiedades" class="btn btn-custom btn-lg">Ver Propiedades</a>
        </div>
    </section>

    <!-- Sección Propiedades Destacadas -->
    <section id="propiedades" class="p-5 text-center bg-light">
        <div class="container">
            <h2 class="mb-4">Propiedades Destacadas</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/public/images/property1.jpg" class="card-img-top" alt="Propiedad 1">
                        <div class="card-body">
                            <h5 class="card-title">Apartamento en el centro</h5>
                            <p class="card-text">Precio: $150,000</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/public/images/property2.jpg" class="card-img-top" alt="Propiedad 2">
                        <div class="card-body">
                            <h5 class="card-title">Casa con jardín amplio</h5>
                            <p class="card-text">Precio: $250,000</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/public/images/property3.jpg" class="card-img-top" alt="Propiedad 3">
                        <div class="card-body">
                            <h5 class="card-title">Terreno para construcción</h5>
                            <p class="card-text">Precio: $100,000</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Quiénes Somos -->
    <section id="nosotros" class="bg-primary text-white p-5 text-center">
        <div class="container">
            <h2>Quiénes Somos</h2>
            <p class="lead">Somos una inmobiliaria con más de 10 años de experiencia en el sector, ayudando a familias a encontrar su hogar ideal.</p>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="p-5 text-center">
        <div class="container">
            <h2>Contacto</h2>
            <form action="/send-contact" method="POST" class="form-inline justify-content-center">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3">
        <p>© 2024 Inmobiliaria SOL DE ORO. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
