<?php
require_once __DIR__ . '/../models/Venta.php'; // Asegúrate de incluir el modelo

class VentasController {

    public function index() {
        // Crear una instancia del modelo
        $ventaModel = new Venta();
        
        // Obtener todas las ventas
        $ventas = $ventaModel->getAll();
        
        // Pasar los datos a la vista
        require_once __DIR__ . '/../views/ventas/index.php';
    }

    public function create() { // Método que maneja la creación de una nueva venta
        // Mostrar el formulario para registrar una nueva venta
        require_once __DIR__ . '/../views/ventas/create.php';
    }

    public function registrar() {
        // Mostrar el formulario para registrar una nueva venta
        require_once __DIR__ . '/../views/ventas/registrar.php';
    }

    public function guardar() {
        // Guardar la nueva venta en la base de datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ventaModel = new Venta();
            $ventaModel->insert([
                'id_propiedad' => $_POST['id_propiedad'],
                'id_cliente' => $_POST['id_cliente'],
                'fecha' => $_POST['fecha'],
                'precio_venta' => $_POST['precio_venta'],
                'estado' => $_POST['estado']
            ]);
        }

        // Redirigir al listado de ventas
        header('Location: /public/ventas/index');
    }

    public function delete($id) {
        // Eliminar la venta con el ID $id
        $ventaModel = new Venta();
        $ventaModel->delete($id);

        // Redirigir al listado de ventas
        header('Location: /public/ventas/index');
    }

    public function historial() {
        // Mostrar el historial de ventas
        require_once __DIR__ . '/../views/ventas/historial.php';
    }
}
