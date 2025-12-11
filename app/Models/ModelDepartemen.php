<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDepartemen extends Model{
    protected $DBGroup = 'default';
    protected $table = 'departemen';
    protected $primaryKey = 'id_departemen';
    protected $useAutoIncrement = false;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectedFields = false;
    protected $allowedFields = ['id_departemen', 'nm_departemen', 'id_perusahaan'];

    public function getDepartemenData(){
        $builder = $this->db->table('departemen');
        $builder->select('*');
        $builder->join('perusahaan', 
        'departemen.id_perusahaan = perusahaan.id_perusahaan', 'inner');
        $query = $builder->get();

        return $query->getResultArray();
    }

}

?>