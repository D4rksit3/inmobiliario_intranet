<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClientesController {
    public function index() {
        $cliente = new Cliente();
        $clientes = $cliente->getAll();
        require_once __DIR__ . '/../views/clientes/index.php';
    }

    public function create() {
        require_once __DIR__ . '/../views/clientes/create.php';
    }

    public function store() {
        $cliente = new Cliente();
        
        // Asegurarse de que se pasen correctamente los datos desde el formulario
        if (isset($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['direccion'])) {
            $cliente->insert($_POST);
            header('Location: /public/clientes');
        } else {
            echo "Faltan algunos campos. Por favor, rellena todos los datos.";
        }
    }
    

    public function edit($id) {
        $cliente = new Cliente();
        $data = $cliente->getById($id);
        require_once __DIR__ . '/../views/clientes/edit.php';
    }

    public function update($id) {
        $cliente = new Cliente();
        $cliente->update($id, $_POST);
        header('Location: /public/clientes');
    }

    public function delete($id) {
        $cliente = new Cliente();
        $cliente->delete($id);
        header('Location: /public/clientes');
    }
}
