<?php

namespace App\Models;

use CodeIgniter\Model;

class SlideModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'slider';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'gambar', 'tampil'];
    
}
