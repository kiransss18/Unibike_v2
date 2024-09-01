<?php

namespace App\Controllers;

use App\Models\BikesModel;

class Bike extends BaseController
{

    public function index()
    {
        $data['title'] = "List Sepeda";
        $data['activeMenu'] = "List Sepeda";

        $bike = new BikesModel();
        $data['bikes'] = $bike->getAllBikes();


        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('sepeda/sepeda');
        echo view("layout/footer");

    }

    //Detail Sepeda
    public function bikedetail($id_bikes)
    {
        $data['title'] = "Detail Sepeda";
        $data['activeMenu'] = "List Sepeda";

        $bike = new BikesModel();
        $data['bike'] = $bike->getBike($id_bikes);

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('sepeda/sepedadetail');
        echo view("layout/footer");
    }

    //Tambah Sepeda
    public function create()
    {
        $data['title'] = "Tambah Sepeda";
        $data['activeMenu'] = "Tambah Sepeda";

        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_bikes' => [
                'label' => 'ID Sepeda',
                'rules' => 'required|min_length[5]|is_unique[bikes.id_bikes]',
            ],
            'seri' => 'required|min_length[5]',
            'tahun' => 'required',
            'foto' => 'uploaded[foto]|max_size[foto,2048]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'deskripsi' => 'permit_empty',
        ]);

        if (!$this->validate($validation->getRules())) {
            $data['validation'] = $validation;
            session()->setFlashdata('errors', $validation->getErrors());
        } else {
            if ($this->request->getPost('deskripsi') == '') {
                $deskripsi = '-';
            } else {
                $deskripsi = $this->request->getPost('deskripsi');
            }

            $bike = new BikesModel();
            $file = $this->request->getFile('foto');
            if ($file->isValid() && $file->isFile()) {
                $fileData = file_get_contents($file->getPathname());
                $bike->insert([
                    "id_bikes" => $this->request->getPost('id_bikes'),
                    "seri" => $this->request->getPost('seri'),
                    "tahun" => $this->request->getPost('tahun'),
                    "foto" => $fileData,
                    "deskripsi" => $deskripsi,
                    "status" => 1,
                    "baterai" => 100,
                    "id_shelter" => 1,
                    "lat" => -5.368010191154698,
                    "lng" => 105.242013296799,
                ]);
            }
            return redirect('bikes');
        }

        echo view('layout/header', $data);
        echo view('layout/sidebar', $data);
        echo view('sepeda/sepedatambah', $data);
        echo view('layout/footer');
    }

    // edit sepeda
    public function edit($id)
    {
        $data['title'] = 'Edit Sepeda';
        $data['activeMenu'] = 'List Sepeda';

        $bike = new BikesModel();
        $data['bike'] = $bike->where('id_bikes', $id)->first();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'seri' => 'required|min_length[5]',
            'tahun' => 'required',
            'foto' => 'mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,2048]|is_image[foto]'
        ]);

        if (!$this->validate($validation->getRules())) {
            $data['validation'] = $validation;
            session()->setFlashdata('errors', $validation->getErrors());
        } else {
            $updateData = [
                'seri' => $this->request->getPost('seri'),
                'tahun' => $this->request->getPost('tahun'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];


            $file = $this->request->getFile('foto');
            if ($file->isValid() && $file->isFile()) {
                $fileData = file_get_contents($file->getPathname());
                $bike->update($id, [
                    'foto' => $fileData,
                ]);
            }

            $bike->update($id, $updateData);

            return redirect()->to('bikes')->withInput();
        }

        echo view('layout/header', $data);
        echo view('layout/sidebar', $data);
        echo view('sepeda/sepedaedit', $data);
        echo view('layout/footer');
    }


    // hapus sepeda
    public function delete($id_bikes)
    {
        $bike = new BikesModel();
        $bike->delete($id_bikes);
        return redirect('bikes');
    }

}