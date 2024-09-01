<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'npm';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nama', 'email', 'npm', 'jurusan', 'fakultas', 'angkatan'];


    public function totalUsers()
    {
        return $this->countAllResults();
    }

    public function getAllUsers()
    {
        $subquery = $this->db->table('rents')
            ->select("npm, SUM(TIMESTAMPDIFF(SECOND, waktu_pinjam, waktu_kembali)) as total_rent_time")
            ->groupBy('npm')
            ->getCompiledSelect();

        $query = $this->db->table('students')
            ->select('students.*, COUNT(rents.id_rents) as rents_users, subquery.total_rent_time')
            ->join("($subquery) as subquery", 'students.npm = subquery.npm', 'left')
            ->join('rents', 'students.npm = rents.npm', 'left')
            ->groupBy('students.npm, subquery.total_rent_time')
            ->get();

        $result = $query->getResultArray();

        foreach ($result as $key => $value) {
            $total_waktu = $value['total_rent_time'];
            $hours = floor($total_waktu / 3600);
            $minutes = floor(($total_waktu % 3600) / 60);
            $seconds = $total_waktu % 60;
            $result[$key]['total_rent_time'] = "$hours jam $minutes menit $seconds detik";
        }

        return $result;
    }

    public function getNpm($npm)
    {
        $subquery = $this->db->table('rents')
            ->select("npm, SUM(TIMESTAMPDIFF(SECOND, waktu_pinjam, waktu_kembali)) as total_rent_time")
            ->where('npm', $npm)
            ->getCompiledSelect();

        $query = $this->db->table('students')
            ->select('students.*, COUNT(rents.id_rents) as rents_users, MAX(subquery.total_rent_time) as total_rent_time')
            ->join("($subquery) as subquery", 'students.npm = subquery.npm', 'left')
            ->join('rents', 'students.npm = rents.npm', 'left')
            ->where('students.npm', $npm)
            ->get();

        $result = $query->getRowArray();

        $total_waktu = $result['total_rent_time'];
        $hours = floor($total_waktu / 3600);
        $minutes = floor(($total_waktu % 3600) / 60);
        $seconds = $total_waktu % 60;
        $result['total_rent_time'] = "$hours jam $minutes menit $seconds detik";

        return $result;
    }

    public function getRentLogs($npm)
    {
        $rentLogs = $this->db->table('rents')
            ->select('id_rents, id_bikes, waktu_kembali, TIMESTAMPDIFF(SECOND, rents.waktu_pinjam, rents.waktu_kembali) as total_time, total_jarak')
            ->join('students', 'rents.npm = students.npm', 'left')
            ->where('students.npm', $npm)
            ->get();

        $result = $rentLogs->getResultArray();

        foreach ($result as $key => $value) {
            $total_time = $value['total_time'];
            $hours = floor($total_time / 3600);
            $minutes = floor(($total_time % 3600) / 60);
            $seconds = $total_time % 60;
            $result[$key]['total_time'] = "$hours jam $minutes menit $seconds detik";

            $total_jarak_meter = $value['total_jarak'];
            $total_jarak_km = $total_jarak_meter / 1000;
            $result[$key]['total_jarak'] = number_format($total_jarak_km, 2) . 'km';
        }

        return $result;
    }

}