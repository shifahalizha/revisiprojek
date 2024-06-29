<?php

namespace App\Controllers;

use App\Models\CocModel;
use App\Models\ProdukcocModel;
use App\Models\ProdukModel;
use App\Models\ValoModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Produkcoc extends ResourceController
{
    private $produkcocModel;
    protected $cocModel;
    public function __construct()
    {
        $this->produkcocModel = new ProdukcocModel();
        $this->cocModel = new CocModel();

    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $produkcoc = $this->produkcocModel->findAll();

        $payload = [
            "produkcoc" => $produkcoc
        ];

        echo view('coc/shopcoc', $payload);
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
        $produkcoc = $this->produkcocModel->find($id);

        if (!$produkcoc) {
            throw new \Exception("Data not found!");
        }
        $data = [
            'produk' => $produkcoc,
        ];

        return view('coc/new', $data);
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

        $this->cocModel->insert($payload);

        return redirect()->to('/produkcoc');
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
