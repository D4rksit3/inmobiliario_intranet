<?php
require_once __DIR__ . '/../core/Database.php';

class Venta {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM ventas")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $sql = "INSERT INTO ventas (ID_Propiedad, ID_Cliente, Fecha, Precio_Venta, Estado) 
                VALUES (:id_propiedad, :id_cliente, :fecha, :precio_venta, :estado)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id_propiedad' => $data['id_propiedad'],
            'id_cliente' => $data['id_cliente'],
            'fecha' => $data['fecha'],
            'precio_venta' => $data['precio_venta'],
            'estado' => $data['estado']
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM ventas WHERE ID_Venta = :id");
        $stmt->execute(['id' => $id]);
    }
    
    public function getVentasConDetalles() {
        $sql = "
            SELECT 
                v.ID_Venta,
                v.Fecha,
                v.Precio_Venta,
                v.Estado,
                c.Nombre AS Cliente_Nombre,
                c.Apellido AS Cliente_Apellido,
                p.Dirección AS Propiedad_Direccion,
                p.Tipo AS Propiedad_Tipo
            FROM ventas v
            JOIN clientes c ON v.ID_Cliente = c.ID_Cliente
            JOIN propiedades p ON v.ID_Propiedad = p.ID_Propiedad
            ORDER BY v.Fecha DESC
        ";
    
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    


}
