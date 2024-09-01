<?php

namespace App\Models;

use CodeIgniter\Model;

class SheltersModel extends Model
{
    protected $table = 'shelters';
    protected $primaryKey = 'id_shelter';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_shelter', 'lokasi', 'lat', 'lng'];

    public function getAllShelters()
    {
        $query = $this->db->table('shelters')
            ->select('shelters.*, COUNT(bikes.id_bikes) as jumlah_sepeda')
            ->join('bikes', 'shelters.id_shelter = bikes.id_shelter', 'left')
            ->groupBy('shelters.id_shelter')
            ->get();

        $results = $query->getResultArray();
        return $results;
    }

    public function getShelter($id_shelter)
    {
        $query = $this->db->table('shelters')
            ->select('shelters.*, COUNT(bikes.id_bikes) as jumlah_sepeda')
            ->join('bikes', 'shelters.id_shelter = bikes.id_shelter', 'left')
            ->where('shelters.id_shelter', $id_shelter)
            ->get();

        $result = $query->getRowArray();
        return $result;
    }

    public function shelterDashboard()
    {
        $query = $this->db->table('shelters')
            ->select('shelters.id_shelter, shelters.nama_shelter, shelters.lat, shelters.lng,
                  COUNT(bikes.id_bikes) as total_sepeda,
                  (SELECT COUNT(*) FROM rents WHERE rents.shelter_pinjam = shelters.id_shelter) as total_pinjam')
            ->join('bikes', 'shelters.id_shelter = bikes.id_shelter', 'left')
            ->groupBy('shelters.id_shelter, shelters.nama_shelter, shelters.lat, shelters.lng')
            ->get();

        $result = $query->getResultArray();

        return $result;
    }

    public function Markers()
    {
        $query = $this->db->table('shelters')
            ->select('lat, lng, nama_shelter as title')
            ->get();

        $result = $query->getResultArray();

        return $result;
    }
}