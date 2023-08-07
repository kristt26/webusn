<?php

namespace App\Models;

use CodeIgniter\Model;

class KerjasamaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kerjasama';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['instansi', 'gambar', 'tampil'];
}
