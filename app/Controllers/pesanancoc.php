<?php

namespace App\Controllers;

use App\Models\CocModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ValoModel;
use CodeIgniter\RESTful\ResourceController;

class Pesanancoc extends ResourceController
{
    protected $cocModel;
    public function __construct()
    {
        $this->cocModel = new CocModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $pesanancoc = $this->cocModel->findAll();
        $payload = [
            "pesanancoc" => $pesanancoc
        ];
        echo view('admin/pesanancoc', $payload);
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
        $pesanancoc = $this->cocModel->find($id);
        
        if (!$pesanancoc) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('admin/editcoc', ["data" => $pesanancoc]);
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

        $this->cocModel->update($id, $payload);
        return redirect()->to('/pesanancoc');
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
        $this->cocModel->delete($id);
        return redirect()->to('/pesanancoc');
    }
}