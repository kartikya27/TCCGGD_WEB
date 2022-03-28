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
        echo view('Pages/tccCouncilPage');
        echo view('Pages/brands');
        echo view('Pages/why_Tcc');
        echo view('Pages/tcc_team');
        echo view('Pages/contact_map');

    }

    public function services()
    {
        $page['title'] = "The Communication Council - TCC";
        echo view('templates/header',$page);
        echo view('templates/TCC_Header');
        echo view('Pages/services');
        echo view('Pages/contact_map');
    }
    public function clients()
    {
        $page['title'] = "The Communication Council - TCC";
        echo view('templates/header',$page);
        echo view('templates/TCC_Header');
        echo view('Pages/our-clients');
        echo view('Pages/why_Tcc');
        echo view('Pages/contact_map');
    }
}
