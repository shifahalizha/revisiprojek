<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ValoModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Produk extends ResourceController
{
    private $produkModel;
    protected $valoModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->valoModel = new ValoModel();
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $produkvalo = $this->produkModel->findAll();

        $payload = [
            "produkvalo" => $produkvalo
        ];

        echo view('valo/shopvalo', $payload);

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
        $produkvalo = $this->produkModel->find($id);

        if (!$produkvalo) {
            throw new \Exception("Data not found!");
        }
        $data = [
            'produk' => $produkvalo,
        ];

        return view('valo/new', $data);
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
        $payload = [
            "produk_id" => $this->request->getPost('produk_id'),
            "username" => $this->request->getPost('username'),
            "pembayaran" => $this->request->getPost('pembayaran'),
        ];

        $this->valoModel->insert($payload);

        return redirect()->to('/produk');
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
        //
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
        //
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
        //
    }
}
