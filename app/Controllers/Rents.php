<?php

namespace App\Controllers;

use App\Models\RentsModel;

class Rents extends BaseController
{

    public function index()
    {
        $data['title'] = "List Data Peminjaman";
        $data['activeMenu'] = "List Data Peminjaman";

        $rent = new RentsModel();
        $data['rents'] = $rent->getAllRents();

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('peminjaman/pinjam');
        echo view("layout/footer");

    }

    public function rentdetail($id_rents)
    {
        $data['title'] = "Detail Peminjaman";
        $data['activeMenu'] = "List Data Peminjaman";

        $rent = new RentsModel();
        $data['rent'] = $rent->getRent($id_rents);

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('peminjaman/pinjamdetail');
        echo view("layout/footer");
    }

}