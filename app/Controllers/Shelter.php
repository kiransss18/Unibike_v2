<?php

namespace App\Controllers;

use App\Models\SheltersModel;

class Shelter extends BaseController
{

    public function index()
    {
        $data['title'] = "List Shelter";
        $data['activeMenu'] = "List Shelter";

        $shelter = new SheltersModel();
        $data['shelters'] = $shelter->getAllShelters();


        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('shelter/shelter');
        echo view("layout/footer");

    }

    //Detail shelter
    public function shelterdetail($id_shelter)
    {
        $data['title'] = "Detail Shelter";
        $data['activeMenu'] = "List Shelter";

        $shelter = new SheltersModel();
        $data['shelter'] = $shelter->getShelter($id_shelter);

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('shelter/shelterdetail');
        echo view("layout/footer");
    }

}