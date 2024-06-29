<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ValoModel;
use CodeIgniter\RESTful\ResourceController;

class Pesanan extends ResourceController
{
    protected $valoModel;
    public function __construct()
    {
        $this->valoModel = new ValoModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $pesananvalo = $this->valoModel->findAll();
        $payload = [
            "pesananvalo" => $pesananvalo
        ];
        echo view('admin/pesanan', $payload);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $pesananvalo = $this->valoModel->find($id);
        
        if (!$pesananvalo) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('admin/edit', ["data" => $pesananvalo]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        
        $payload = [
            "username" => $this->request->getPost('username'),
            "produk_id" => $this->request->getPost('produk_id'),
            "pembayaran" => $this->request->getPost('pembayaran'),
            "status" => $this->request->getPost('status'),
        ];

        $this->valoModel->update($id, $payload);
        return redirect()->to('/pesanan');
    }


    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->valoModel->delete($id);
        return redirect()->to('/pesanan');
    }
}