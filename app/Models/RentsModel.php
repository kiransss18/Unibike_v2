<?php

namespace App\Models;

use CodeIgniter\Model;

class RentsModel extends Model
{
    protected $table = 'rents';
    protected $primaryKey = 'id_rents';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_rents', 'id_bikes', 'npm', 'waktu_pinjam', 'waktu_kembali', 'shelter_pinjam', 'shelter_kembali', 'total_jarak'];

    public function totalRents()
    {
        $query = $this->db->query("SELECT 
        COUNT(*) as total_pinjam, 
        COUNT(CASE WHEN bikes.status = 1 THEN 1 END) as total_kembali 
        FROM rents 
        JOIN bikes ON rents.id_bikes = bikes.id_bikes");
        $result = $query->getRow();
        return $result;
    }

    public function getAllRents()
    {
        $query = $this->db->table('rents')
            ->select('rents.*, shelters.nama_shelter AS shelter_pinjam, shelters_kembali.nama_shelter AS shelter_kembali, bikes.status AS status')
            ->select("CONCAT(
                TIMESTAMPDIFF(HOUR, rents.waktu_pinjam, rents.waktu_kembali), ' jam ',
                MOD(TIMESTAMPDIFF(MINUTE, rents.waktu_pinjam, rents.waktu_kembali), 60), ' menit ',
                MOD(TIMESTAMPDIFF(SECOND, rents.waktu_pinjam, rents.waktu_kembali), 60), ' detik'
            ) AS total_waktu", false)
            ->select("ROUND(total_jarak / 1000, 2) AS total_jarak", false)
            ->join('shelters', 'rents.shelter_pinjam = shelters.id_shelter', 'left')
            ->join('shelters as shelters_kembali', 'rents.shelter_kembali = shelters_kembali.id_shelter', 'left')
            ->join('bikes', 'rents.id_bikes = bikes.id_bikes', 'left')
            ->get();

        $result = $query->getResultArray();

        return $result;
    }

    public function getRent($id_rents)
    {
        $query = $this->db->table('rents')
            ->select('rents.*, shelters.nama_shelter AS shelter_pinjam, shelters_kembali.nama_shelter AS shelter_kembali, bikes.status AS status')
            ->select("CONCAT(
                TIMESTAMPDIFF(HOUR, rents.waktu_pinjam, rents.waktu_kembali), ' jam ',
                MOD(TIMESTAMPDIFF(MINUTE, rents.waktu_pinjam, rents.waktu_kembali), 60), ' menit ',
                MOD(TIMESTAMPDIFF(SECOND, rents.waktu_pinjam, rents.waktu_kembali), 60), ' detik'
            ) AS total_waktu", false)
            ->select("ROUND(total_jarak / 1000, 2) AS total_jarak", false)
            ->join('shelters', 'rents.shelter_pinjam = shelters.id_shelter', 'left')
            ->join('shelters as shelters_kembali', 'rents.shelter_kembali = shelters_kembali.id_shelter', 'left')
            ->join('bikes', 'rents.id_bikes = bikes.id_bikes', 'left')
            ->where('rents.id_rents', $id_rents)
            ->get();

        $result = $query->getRowArray();

        return $result;
    }
}