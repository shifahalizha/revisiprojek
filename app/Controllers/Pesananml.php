<?php

namespace App\Controllers;

use App\Models\MoleModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Pesananml extends ResourceController
{
    protected $moleModel;
    public function __construct()
    {
        $this->moleModel = new MoleModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $pesananmole = $this->moleModel->findAll();
        $payload = [
            "pesananmole" => $pesananmole
        ];
        echo view('admin/pesananml', $payload);
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
        $pesananmole = $this->moleModel->find($id);
        
        if (!$pesananmole) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('admin/editml', ["data" => $pesananmole]);
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

        $this->moleModel->update($id, $payload);
        return redirect()->to('/pesananml');
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
        $this->moleModel->delete($id);
        return redirect()->to('/pesananml');
    }
}
