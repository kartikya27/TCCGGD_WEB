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
        $page['title'] = "The Communication Council - TCC";
        echo view('templates/header',$page);
        echo view('templates/TCC_Header');
        
        return view('Pages/tccCouncilPage');
    }
}
