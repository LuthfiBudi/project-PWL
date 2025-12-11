<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model{
    protected $DBGroup = 'default';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectedFields = false;
    protected $allowedFields = ['id', 'nama', 'username', 'password', 'level'];
}

?>