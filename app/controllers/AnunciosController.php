<?php

class AnunciosController {

    public function index() {
        // Listar todos los anuncios
        require_once __DIR__ . '/../views/anuncios/index.php';
    }

    public function crear() {
        // Mostrar el formulario para crear un nuevo anuncio
        require_once __DIR__ . '/../views/anuncios/crear.php';
    }

    public function guardar() {
        // Guardar el nuevo anuncio (lógica de base de datos)
        // Redirigir de vuelta al listado de anuncios
        header('Location: /public/anuncios/index');
    }

    public function modificar($id) {
        // Mostrar el formulario para modificar el anuncio con el ID $id
        require_once __DIR__ . '/../views/anuncios/modificar.php';
    }

    public function actualizar($id) {
        // Actualizar el anuncio con el ID $id (lógica de base de datos)
        // Redirigir de vuelta al listado de anuncios
        header('Location: /public/anuncios/index');
    }

    public function eliminar($id) {
        // Eliminar el anuncio con el ID $id (lógica de base de datos)
        // Redirigir de vuelta al listado de anuncios
        header('Location: /public/anuncios/index');
    }
}
