<?php
require_once __DIR__ . '/../core/Database.php';

class Alquiler {
    private $db;

    public function __construct() {
        // Usamos la instancia de Database y accedemos a los métodos query y prepare
        $this->db = new Database();
    }

    public function getAll() {
        $sql = "SELECT * FROM alquileres";
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getAlquilerDetalles($idAlquiler) {
        $sql = "
            SELECT 
                a.ID_Alquiler,
                a.Fecha_Inicio,
                a.Fecha_Fin,
                a.Precio_Alquiler,
                a.Estado,
                c.Nombre AS Cliente_Nombre,
                c.Apellido AS Cliente_Apellido,
                p.Dirección AS Propiedad_Direccion,
                p.Tipo AS Propiedad_Tipo
            FROM alquileres a
            JOIN clientes c ON a.ID_Cliente = c.ID_Cliente
            JOIN propiedades p ON a.ID_Propiedad = p.ID_Propiedad
            WHERE a.ID_Alquiler = :idAlquiler
        ";
    
        $query = $this->db->prepare($sql);
        $query->bindParam(':idAlquiler', $idAlquiler);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $sql = "SELECT * FROM alquileres WHERE id_alquiler = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $sql = "INSERT INTO alquileres (id_propiedad, id_cliente, fecha_inicio, fecha_fin, precio_alquiler) 
                VALUES (:id_propiedad, :id_cliente, :fecha_inicio, :fecha_fin, :precio_alquiler)";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id_propiedad', $data['id_propiedad']);
        $query->bindParam(':id_cliente', $data['id_cliente']);
        $query->bindParam(':fecha_inicio', $data['fecha_inicio']);
        $query->bindParam(':fecha_fin', $data['fecha_fin']);
        $query->bindParam(':precio_alquiler', $data['precio_alquiler']);
        $query->execute();
    }

    public function update($id, $data) {
        $sql = "UPDATE alquileres 
                SET id_propiedad = :id_propiedad, id_cliente = :id_cliente, fecha_inicio = :fecha_inicio, fecha_fin = :fecha_fin, precio_alquiler = :precio_alquiler 
                WHERE id_alquiler = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':id_propiedad', $data['id_propiedad']);
        $query->bindParam(':id_cliente', $data['id_cliente']);
        $query->bindParam(':fecha_inicio', $data['fecha_inicio']);
        $query->bindParam(':fecha_fin', $data['fecha_fin']);
        $query->bindParam(':precio_alquiler', $data['precio_alquiler']);
        $query->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM alquileres WHERE id_alquiler = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
