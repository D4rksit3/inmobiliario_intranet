<?php

require_once __DIR__ . '/../core/Database.php';

class Propiedad {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Obtener todas las propiedades
    public function getAll() {
        $sql = "SELECT * FROM propiedades";  // Consulta todas las propiedades
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insertar una nueva propiedad
    public function insert($data) {
        $sql = "INSERT INTO propiedades (Tipo, Dirección, Precio, Descripción, Estado)
                VALUES (:tipo, :direccion, :precio, :descripcion, :estado)";
        $query = $this->db->prepare($sql);
        $query->bindParam(':tipo', $data['tipo']);
        $query->bindParam(':direccion', $data['direccion']);
        $query->bindParam(':precio', $data['precio']);
        $query->bindParam(':descripcion', $data['descripcion']);
        $query->bindParam(':estado', $data['estado']);
        $query->execute();
    }

    // Obtener una propiedad por su ID
    public function getById($id) {
        $sql = "SELECT * FROM propiedades WHERE ID_Propiedad = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);  // Solo una fila
    }

    // Actualizar una propiedad
    public function update($id, $data) {
        $sql = "UPDATE propiedades
                SET Tipo = :tipo, Dirección = :direccion, Precio = :precio, Descripción = :descripcion, Estado = :estado
                WHERE ID_Propiedad = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':tipo', $data['tipo']);
        $query->bindParam(':direccion', $data['direccion']);
        $query->bindParam(':precio', $data['precio']);
        $query->bindParam(':descripcion', $data['descripcion']);
        $query->bindParam(':estado', $data['estado']);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    // Eliminar una propiedad por su ID
    public function delete($id) {
        $sql = "DELETE FROM propiedades WHERE ID_Propiedad = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
