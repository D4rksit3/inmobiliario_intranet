<?php
require_once __DIR__ . '/../models/Propiedad.php';

class PropiedadesController {
    public function index() {
        $propiedad = new Propiedad(); // Instancia el modelo
        $propiedades = $propiedad->getAll(); // Obtiene todas las propiedades
        // Aquí listarías las propiedades
        require_once __DIR__ . '/../views/propiedades/index.php';
    }


    public function create() {
        require_once __DIR__ . '/../views/propiedades/create.php';
    }

    public function store() {
        $propiedad = new Propiedad();
        $propiedad->insert($_POST);
        header('Location: /public/propiedades');
    }

    public function edit($id) {
        $propiedad = new Propiedad();
        $data = $propiedad->getById($id);
        require_once __DIR__ . '/../views/propiedades/edit.php';
    }

    public function update($id) {
        $propiedad = new Propiedad();
        $propiedad->update($id, $_POST);
        header('Location: /public/propiedades');
    }

    public function delete($id) {
        $propiedad = new Propiedad();
        $propiedad->delete($id);
    
        $_SESSION['mensaje'] = "Propiedad eliminada correctamente.";
        header('Location: /public/propiedades');
    }
    
}
