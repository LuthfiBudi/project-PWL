<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model{
    protected $DBGroup = 'default';
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectedFields = false;
    protected $allowedFields = ['id_karyawan', 'nm_karyawan', 'id_perusahaan', 'id_departemen'];

    public function getKaryawanData(){
        $builder = $this->db->table('karyawan');
        $builder->select('*');
        $builder->join('perusahaan', 
        'perusahaan.id_perusahaan = karyawan.id_perusahaan')
        ->join('departemen','departemen.id_departemen = karyawan.id_departemen');

        $query = $builder->get();

        return $query->getResultArray();
    }

}

?>