<?php
require_once __DIR__ . '/../core/Database.php';

class Cliente {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $sql = "CALL obtenerClientes()";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE ID_Cliente = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        // Validar los campos y asignar valores o nulos
        $nombre = isset($data['nombre']) ? $data['nombre'] : null;
        $apellido = isset($data['apellido']) ? $data['apellido'] : null;
        $email = isset($data['email']) ? $data['email'] : null;
        $telefono = isset($data['telefono']) ? $data['telefono'] : null;
        $direccion = isset($data['direccion']) ? $data['direccion'] : null;
    
        // Validar que no sean nulos
        if ($nombre && $apellido && $email && $telefono && $direccion) {
            $sql = "CALL insertarCliente(:nombre, :apellido, :email, :telefono, :direccion)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':email' => $email,
                ':telefono' => $telefono,
                ':direccion' => $direccion
            ]);
        } else {
            throw new Exception('Todos los campos son obligatorios.');
        }
    }
    

    public function update($id, $data) {
        $sql = "CALL actualizarCliente(:id, :nombre, :apellido, :email, :telefono, :direccion)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':nombre' => $data['nombre'],
            ':apellido' => $data['apellido'],
            ':email' => $data['email'],
            ':telefono' => $data['telefono'],
            ':direccion' => $data['direccion']
        ]);
    }
    

    public function delete($id) {
        $sql = "CALL eliminarCliente(:id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    
}
