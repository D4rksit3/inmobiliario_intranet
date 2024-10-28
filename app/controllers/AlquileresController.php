<?php
require_once __DIR__ . '/../models/Alquiler.php';

class AlquileresController {
    public function index() {
        $alquiler = new Alquiler();
        $alquileres = $alquiler->getAll();
        // Debug: Verificar el contenido de los alquileres
       /*  echo '<pre>';
        print_r($alquileres);
        echo '</pre>'; */
       /*  die();  */ // Elimina esta línea después de verificar los datos.
        
        require_once __DIR__ . '/../views/alquileres/index.php';
    }


    public function create() {
        require_once __DIR__ . '/../views/alquileres/create.php';
    }

    public function store() {
        if (!empty($_POST['id_propiedad']) && !empty($_POST['id_cliente']) && !empty($_POST['fecha_inicio']) && !empty($_POST['fecha_fin']) && !empty($_POST['precio_alquiler'])) {
            $alquiler = new Alquiler();
            $alquiler->insert($_POST);
            header('Location: /public/alquileres');
        } else {
            echo "Faltan algunos campos. Por favor, rellena todos los datos.";
        }
    }

    public function edit($id) {
        // Conectar a la base de datos
        $db = new mysqli('localhost', 'root', '', 'inmobiliario'); // Reemplaza con tu configuración de base de datos
        
        // Consulta para obtener los detalles del alquiler específico
        $alquiler = $db->query("SELECT * FROM alquileres WHERE ID_Alquiler = $id")->fetch_assoc();
    
        // Consulta para obtener todas las propiedades
        $propiedadesResult = $db->query("SELECT ID_Propiedad, Dirección FROM propiedades");
        $propiedades = [];
        while ($row = $propiedadesResult->fetch_assoc()) {
            $propiedades[] = $row;
        }
    
        // Consulta para obtener todos los clientes
        $clientesResult = $db->query("SELECT ID_Cliente, CONCAT(Nombre, ' ', Apellidos) AS NombreCompleto FROM clientes");
        $clientes = [];
        while ($row = $clientesResult->fetch_assoc()) {
            $clientes[] = $row;
        }
    
        // Pasar los datos a la vista
        require_once __DIR__ . '/../views/alquileres/edit.php';
    }
    

    public function update($id) {
        // Guardar la actualización del alquiler
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $alquiler = new Alquiler();
            $alquiler->update($id, $_POST);
            header('Location: /public/alquileres');
        }
    }


    

    public function delete($id) {
        $alquiler = new Alquiler();
        $alquiler->delete($id);
        header('Location: /public/alquileres');
    }
}
