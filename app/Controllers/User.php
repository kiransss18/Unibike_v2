<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{

    public function index()
    {
        $data['title'] = "List Peminjam";
        $data['activeMenu'] = "List Peminjam";

        $user = new UsersModel();
        $data['users'] = $user->getAllUsers();

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('user/user');
        echo view("layout/footer");

    }


    public function userdetail($npm)
    {
        $data['title'] = "Detail Peminjam";
        $data['activeMenu'] = "List Peminjam";

        $user = new UsersModel();
        $data['user'] = $user->getNpm($npm);
        $data['Logs'] = $user->getRentLogs($npm);

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('user/userdetail', $data);
        echo view("layout/footer");
    }

}