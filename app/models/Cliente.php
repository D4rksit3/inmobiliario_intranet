<?php
require_once __DIR__ . '/../core/Database.php';

class Cliente {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE ID_Cliente = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $nombre = isset($data['nombre']) ? $data['nombre'] : null;
        $apellido = isset($data['apellido']) ? $data['apellido'] : null;
        $email = isset($data['email']) ? $data['email'] : null;
        $telefono = isset($data['telefono']) ? $data['telefono'] : null;
        $direccion = isset($data['direccion']) ? $data['direccion'] : null;

        // Validar que no sean nulos
        if ($nombre && $apellido && $email && $telefono && $direccion) {
            $sql = "INSERT INTO clientes (Nombre, Apellido, Email, Telefono, Direccion) 
                    VALUES (:nombre, :apellido, :email, :telefono, :direccion)";
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
        $sql = "UPDATE clientes SET Nombre = :nombre, Apellido = :apellido, Email = :email, 
                Teléfono = :telefono, Dirección = :direccion WHERE ID_Cliente = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'id' => $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE ID_Cliente = :id");
        $stmt->execute(['id' => $id]);
    }
}
