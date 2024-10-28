<?php
require_once __DIR__ . '/../core/Database.php';

class Venta {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $sql = "CALL obtenerVentas()";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $sql = "CALL insertarVenta(:id_propiedad, :id_cliente, :fecha, :precio_venta, :estado)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id_propiedad' => $data['id_propiedad'],
            ':id_cliente' => $data['id_cliente'],
            ':fecha' => $data['fecha'],
            ':precio_venta' => $data['precio_venta'],
            ':estado' => $data['estado']
        ]);
    }
    

    public function delete($id) {
        $sql = "CALL eliminarVenta(:id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    
    public function getVentasConDetalles() {
        $sql = "CALL obtenerVentasConDetalles()";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    


}
