<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPerusahaan extends Model{
    protected $DBGroup = 'default';
    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $useAutoIncrement = false;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectedFields = false;
    protected $allowedFields = ['id_perusahaan', 'nm_perusahaan'];
}

?>