<?php

require_once __DIR__ . '/../core/Database.php';

class Propiedad {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Obtener todas las propiedades
    public function getAll() {
        $sql = "CALL obtenerPropiedades()";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    

    // Insertar una nueva propiedad
    public function insert($data) {
        $sql = "CALL insertarPropiedad(:tipo, :direccion, :precio, :descripcion, :estado)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':tipo' => $data['tipo'],
            ':direccion' => $data['direccion'],
            ':precio' => $data['precio'],
            ':descripcion' => $data['descripcion'],
            ':estado' => $data['estado']
        ]);
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
        $sql = "CALL actualizarPropiedad(:id, :tipo, :direccion, :precio, :descripcion, :estado)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':tipo' => $data['tipo'],
            ':direccion' => $data['direccion'],
            ':precio' => $data['precio'],
            ':descripcion' => $data['descripcion'],
            ':estado' => $data['estado']
        ]);
    }
    

    // Eliminar una propiedad por su ID
    public function delete($id) {
        $sql = "CALL eliminarPropiedad(:id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    
}
