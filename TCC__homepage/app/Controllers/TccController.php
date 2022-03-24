<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TccController extends BaseController
{
    public function index()
    {
        // redirect('the-communication-council');
    }

    public function the_communication_council(){
        echo view('templates/header');
        return view('Pages/tccCouncilPage');
    }
}
