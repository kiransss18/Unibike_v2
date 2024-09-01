<?php

namespace App\Models;

use CodeIgniter\Model;

class BikesModel extends Model
{
    protected $table = 'bikes';
    protected $primaryKey = 'id_bikes';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['foto', 'seri', 'tahun', 'deskripsi', 'status', 'baterai', 'id_shelter', 'lat', 'lng'];


    public function totalBikes()
    {
        return $this->countAllResults();
    }

    public function getAllBikes()
    {
        $query = $this->db->table('bikes')
            ->select('bikes.*, COUNT(rents.id_rents) as rents_bikes, SUM(TIMESTAMPDIFF(SECOND, waktu_pinjam, waktu_kembali)) as total_bike_times')
            ->join('rents', 'bikes.id_bikes = rents.id_bikes', 'left')
            ->groupBy('bikes.id_bikes')
            ->get();

        $results = $query->getResultArray();
        foreach ($results as &$result) {
            $total_bike_times = $result['total_bike_times'];
            $hours = floor($total_bike_times / 3600);
            $minutes = floor(($total_bike_times % 3600) / 60);
            $seconds = $total_bike_times % 60;
            $result['total_bike_times'] = "$hours jam $minutes menit $seconds detik";
        }

        return $results;
    }

    public function getBike($id_bikes)
    {
        $query = $this->db->table('bikes')
            ->select('bikes.*, shelters.nama_shelter, COUNT(rents.id_rents) as rents_bikes, 
            SUM(TIMESTAMPDIFF(SECOND, waktu_pinjam, waktu_kembali)) as total_bike_times, 
            SUM(total_jarak) as total_jarak')
            ->join('rents', 'bikes.id_bikes = rents.id_bikes', 'left')
            ->join('shelters', 'bikes.id_shelter = shelters.id_shelter', 'left')
            ->where('bikes.id_bikes', $id_bikes)
            ->get();

        $result = $query->getRowArray();
        $total_bike_times = $result['total_bike_times'];
        $hours = floor($total_bike_times / 3600);
        $minutes = floor(($total_bike_times % 3600) / 60);
        $seconds = $total_bike_times % 60;
        $result['total_bike_times'] = "$hours jam $minutes menit $seconds detik";

        $result['total_jarak'] = number_format($result['total_jarak'] / 1000, 2);


        return $result;
    }

}