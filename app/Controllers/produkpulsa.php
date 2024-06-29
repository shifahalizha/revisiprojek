<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ProdukpulsaModel;
use App\Models\PulsaModel;
use App\Models\ValoModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Produkpulsa extends ResourceController
{
    private $produkpulsaModel;
    protected $pulsaModel;
    public function __construct()
    {
        $this->produkpulsaModel = new ProdukpulsaModel();
        $this->pulsaModel = new PulsaModel();
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $produkpulsa = $this->produkpulsaModel->findAll();

        $payload = [
            "produkpulsa" => $produkpulsa
        ];

        echo view('pulsa/shoppulsa', $payload);
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
        $produkpulsa = $this->produkpulsaModel->find($id);

        if (!$produkpulsa) {
            throw new \Exception("Data not found!");
        }
        $data = [
            'produk' => $produkpulsa,
        ];

        return view('pulsa/new', $data);
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

        $this->pulsaModel->insert($payload);

        return redirect()->to('/produkpulsa');
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
