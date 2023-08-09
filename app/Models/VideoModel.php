<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'video';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'link', 'tampil'];
    
}
