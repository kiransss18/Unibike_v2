<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbacksModel extends Model
{
    protected $table = 'feedbacks';
    protected $primaryKey = 'id_feed';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['npm', 'jenis', 'foto', 'isi', 'waktu'];
}