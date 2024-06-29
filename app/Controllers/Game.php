<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Game extends BaseController
{
    public function index()
    {
        return view('game/userview');
    }
}
