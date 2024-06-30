<?php

namespace App\Controllers;

use App\Models\ProdukcocModel;
use App\Models\ProdukmlModel;
use App\Models\ProdukModel;
use App\Models\ProdukpulsaModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Daftar extends ResourceController
{
    protected $produkmlModel;
    protected $produkModel;
    protected $produkcocModel;
    protected $produkpulsaModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->produkmlModel = new ProdukmlModel();
        $this->produkcocModel = new ProdukcocModel();
        $this->produkpulsaModel = new ProdukpulsaModel();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        echo view('admin/daftarproduk');
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
