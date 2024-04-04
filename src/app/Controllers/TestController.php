<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use stdClass;

class TestController extends ResourceController
{
    protected $format    = 'json';

    public function index()
    {
        $objTest = new stdClass();
        $objTest->nombre = 'Test 1';
        return $this->respond($objTest);
    }
}
