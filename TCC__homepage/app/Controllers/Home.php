<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $page['title'] = "TCCGGD - Home";
        echo view('templates/header',$page);
        echo view('index');
        echo view('templates/footer');
    }
}
