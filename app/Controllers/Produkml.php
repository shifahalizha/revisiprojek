<?php

namespace App\Controllers;

use App\Models\MoleModel;
use App\Models\ProdukmlModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Produkml extends ResourceController
{
    private $produkmlModel;
    protected $moleModel;
    public function __construct()
    {
        $this->produkmlModel = new ProdukmlModel();
        $this->moleModel = new MoleModel();
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $produkmole = $this->produkmlModel->findAll();

        $payload = [
            "produkmole" => $produkmole
        ];
        echo view('mole/shopml', $payload);

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
        $produkmole = $this->produkmlModel->find($id);

        if (!$produkmole) {
            throw new \Exception("Data not found!");
        }
        $data = [
            'produk' => $produkmole,
        ];

        return view('mole/new', $data);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        
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

        $this->moleModel->insert($payload);

        return redirect()->to('/produkml');
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
