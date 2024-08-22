<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        return view('Productos');
    }

    public function listar()
    {
        $model = new ProductosModel();
        $request = \Config\Services::request();

        // Obtén los datos del request
        $draw = $request->getPost('draw');
        $start = $request->getPost('start');
        $length = $request->getPost('length');

        $productos = $model->getProductos();

        // Obtener todos los productos
        //    $allProducts = $model->findAll();

        // Paginación
        $totalRecords = count($productos);
        //   $productosPaginated = array_slice($productos, $start, $length);

        // Procesar los datos para DataTables
        $data = [];
        foreach ($productos as $producto) {
            $estado = ($producto['estado'] == 1)
                ? '<span class="badge badge-success">ACTIVO</span>'
                : '<span class="badge badge-danger">INACTIVO</span>';

            $data[] = [
                "0" => $producto['nombre'],
                "1" => $estado,
                "2" => ($producto['estado'])
                    ? '<button type="button" class="btn btn-success btn-sm" onclick="estado(' . $producto['idproducto'] . ',0)"><i class="fa fa-check"></i></button> <button type="button" class="btn btn-info btn-sm" data-bs-target="#modal-producto" data-bs-toggle="modal" onclick="editarModal(' . $producto['idproducto'] . ')"><i class="fa fa-edit"></i></button>'
                    : '<button type="button" class="btn btn-danger btn-sm" onclick="estado(' . $producto['idproducto'] . ',1)"><i class="fa fa-close"></i></button> <button type="button" class="btn btn-info btn-sm" data-bs-target="#modal-producto" data-bs-toggle="modal" onclick="editarModal(' . $producto['idproducto'] . ')"><i class="fa fa-edit"></i></button>'
            ];
        }

        // Resultados para DataTables
        $results = [
            "draw" => intval($draw),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords,
            "data" => $data
        ];

        return $this->response->setJSON($results);
    }

    public function insertar()
    {
        $model = new ProductosModel();
        $request = \Config\Services::request();

        $response = [];

        $data = [
            'nombre' => $this->request->getPost('nombre')
        ];

        if ($model->insertarProducto($data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Producto añadido correctamente'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Error al añadir el producto'
            ]);
        }
    }

    public function datosProducto()
    {

        $model = new ProductosModel();
        $request = \Config\Services::request();

        $response = [];

        $data = $this->request->getPost('idproducto');


        $producto = $model->datosProducto($data);

        return $this->response->setJSON($producto);
    }

    public function editar()
    {
        $model = new ProductosModel();
        $request = \Config\Services::request();

        $response = [];
        $id = $this->request->getPost('idproducto');
        $data = [
            'nombre' => $this->request->getPost('nombre')
        ];

        if ($model->updateProductos($id,$data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Producto actualizado correctamente'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Error al actualizar el producto'
            ]);
        }
    }

    public function estado()
    {
        $model = new ProductosModel();
        $request = \Config\Services::request();

        $response = [];
        $id = $this->request->getPost('idproducto');
        $data = [
            'estado' => $this->request->getPost('estado')
        ];

        if ($model->estado($id,$data)) {
            if ($this->request->getPost('estado')==1){
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Producto activado correctamente'
                ]);
            }else{
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Producto desactivado correctamente'
                ]);
            }       
        } else {
            if ($this->request->getPost('estado')==0){
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Error al activar el producto'
                ]);
            }else{
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Error al desactivar el producto'
                ]);
            }   
        
        }
    }
}
