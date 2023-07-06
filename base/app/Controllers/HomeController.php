<?php

namespace App\Controllers;

use App\Core\Controller;

require_once APP.'Core/Controller.php';

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('welcome',["name" => "Cogip"]);
    }
}

require_once APP.'Views/welcome.php';