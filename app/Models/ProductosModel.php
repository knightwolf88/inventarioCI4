<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    protected $allowedFields = ['nombre', 'pcosto', 'pventa', 'estado', 'idusuario'];

    public function getProductos()
    {
        $builder = $this->db->table($this->table);
        $query = $this->db->query('SELECT * FROM productos');
        return $query->getResultArray();
    }

    public function insertarProducto($data)
    {
        return $this->insert($data);
    }

    public function datosProducto($id)
    {
        return $this->asArray()->find($id);
    }

    public function updateProductos($id, $data)
    {
        return $this->update($id, $data);
    }

    public function estado($id, $data)
    {
        return $this->update($id, $data);
    }
}
