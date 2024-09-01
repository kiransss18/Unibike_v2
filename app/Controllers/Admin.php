<?php

namespace App\Controllers;

use App\Models\AdminsModel;
use Myth\Auth\Password;


class Admin extends BaseController
{

    public function index()
    {
        $data['title'] = "List Admin";
        $data['activeMenu'] = "List Admin";

        $admin = new AdminsModel();
        $data['admins'] = $admin->select('users.*, auth_groups_users.group_id')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->findAll();

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('admin/admin', $data);
        echo view("layout/footer");

    }

    public function create()
    {
        $data['title'] = 'Tambah Admin';
        $data['activeMenu'] = 'Tambah Admin';

        echo view('layout/header', $data);
        echo view('layout/sidebar', $data);
        echo view('Myth\Auth\Views\register', $data);
        echo view('layout/footer');
    }

    public function profile()
    {
        $data['title'] = "Profil Admin";
        $data['activeMenu'] = "";

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('admin/profile');
        echo view("layout/footer");

    }

    public function profileedit($id)
    {

        $data['title'] = "Edit Profil Admin";
        $data['activeMenu'] = "profile";

        $admin = new AdminsModel();
        $data['admin'] = $admin->where('id', $id)->first();


        $validation = \Config\Services::validation();
        $validation->setRules([
            'fullname' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
            ],
            'username' => 'required|' . (user()->username != $this->request->getPost('username') ? 'is_unique[users.username]' : ''),
            'telp_adm' => [
                'label' => 'Nomor Telepon',
                'rules' => 'required',
            ],
            'email' => 'required|valid_email|' . (user()->email != $this->request->getPost('email') ? 'is_unique[users.email]' : ''),
            'password' => 'permit_empty|min_length[8]|alpha_numeric',
            'user_image' => 'mime_in[user_image,image/jpg,image/jpeg,image/png]|max_size[user_image,2048]|is_image[user_image]',
        ]);



        if (!$this->validate($validation->getRules())) {
            $data['validation'] = $validation;
            session()->setFlashdata('errors', $validation->getErrors());
        } else {
            $updateData = [
                "fullname" => $this->request->getPost('fullname'),
                "username" => $this->request->getPost('username'),
                "telp_adm" => $this->request->getPost('telp_adm'),
                "email" => $this->request->getPost('email'),
            ];

            $password = $this->request->getPost('password');
            if (!empty($password) && is_string($password)) {
                $updateData['password_hash'] = Password::hash($password);
            }

            $file = $this->request->getFile('user_image');
            if ($file->isValid() && $file->isFile()) {
                $fileData = file_get_contents($file->getPathname());
                $updateData['user_image'] = $fileData;
            }

            $admin->update($id, $updateData);

            return redirect()->to('profile')->withInput();

        }

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view("admin/profileedit", $data);
        echo view("layout/footer");
    }

}