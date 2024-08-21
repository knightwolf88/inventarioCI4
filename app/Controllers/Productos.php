<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('Productos');
    }

    public function show()
    {
        return 'hola mundo';
    }
}
