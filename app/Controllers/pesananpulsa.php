<?php

namespace App\Controllers;

use App\Models\PulsaModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ValoModel;
use CodeIgniter\RESTful\ResourceController;

class Pesananpulsa extends ResourceController
{
    protected $pulsaModel;
    public function __construct()
    {
        $this->pulsaModel = new PulsaModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $pesananpulsa = $this->pulsaModel->findAll();
        $payload = [
            "pesananpulsa" => $pesananpulsa
        ];
        echo view('admin/pesananpulsa', $payload);
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
        $pesananpulsa = $this->pulsaModel->find($id);
        
        if (!$pesananpulsa) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('admin/editpulsa', ["data" => $pesananpulsa]);
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

        $this->pulsaModel->update($id, $payload);
        return redirect()->to('/pesananpulsa');
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
        $this->pulsaModel->delete($id);
        return redirect()->to('/pesananpulsa');
    }
}