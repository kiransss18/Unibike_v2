<?php

namespace App\Controllers;

use App\Models\SheltersModel;
use App\Models\UsersModel;
use App\Models\RentsModel;
use App\Models\BikesModel;


class Dashboard extends BaseController
{

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['activeMenu'] = "dashboard";

        $usersData = new UsersModel();
        $data['usersData'] = $usersData->select('fakultas')->findAll();
        $data['totalUsers'] = $usersData->totalUsers();

        $bikesData = new BikesModel();
        $data['bikesData'] = $bikesData->findAll();
        $data['bikesStatus'] = $bikesData->where('status', 3)->countAllResults();
        $data['totalBikes'] = $bikesData->totalBikes();

        $rentsData = new RentsModel();
        $data['rentsData'] = $rentsData->select('waktu_kembali')->findAll();
        $data['shelterData'] = $rentsData->select('shelter_pinjam')->findAll();
        $data['totalRents'] = $rentsData->totalRents();


        $shelter = new SheltersModel();
        $data['shelters'] = $shelter->shelterDashboard();

        echo view("layout/header", $data);
        echo view("layout/sidebar", $data);
        echo view('dashboard', $data);
        echo view("layout/footer");

    }

    public function getMarkers()
    {
        $shelter = new SheltersModel();
        $markers_data = $shelter->Markers();
        foreach ($markers_data as $marker) {
            $markers[] = array(
                'lat' => $marker['lat'],
                'lng' => $marker['lng'],
                'title' => $marker['title']
            );
        }
        return json_encode($markers);
    }
}