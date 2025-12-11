<?php

namespace App\Controllers;

use App\Models\ModelPerusahaan;
use App\Models\ModelDepartemen;
use App\Models\ModelKaryawan;

class Company extends BaseController
{
    public function template(){
        return view('template');
    }

    public function index(): string
    {
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            return view('layout/v_content');
        }else {
            # code...
            return redirect()->to(base_url());
        }
    }

    //SECTION - Perusahaan
    public function perusahaan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $data = [
                'title' => 'Informasi Perusahaan',
                "perusahaan" => $perusahaanMdl->findAll()
            ];
            return view('perusahaan/v_perusahaan', $data);
        }else {
            return redirect()->to(base_url());
        }
    }
    
    public function inputperusahaan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            return view('perusahaan/v_inputperusahaan');
        }else {
            return redirect()->to(base_url());
        }
    }

    public function simpanperusahaan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $insert =[
                    'id_perusahaan' => $this->request->getVar('id_perusahaan'),
                    'nm_perusahaan' => $this->request->getVar('nm_perusahaan')
                ];
            $perusahaanMdl->insert($insert);
        return redirect()->to(base_url() . 'comp');
        }else {
            return redirect()->to(base_url());
        } 
    }

    public function editperusahaan($id_perusahaan = ''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $data = [
                'perusahaan' => $perusahaanMdl->
                where('id_perusahaan', $id_perusahaan)->find()
            ];
            return view('perusahaan/v_editperusahaan', $data);
        }else {
            return redirect()->to(base_url());
        }
        
    }

    public function updateperusahaan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
           $perusahaanMdl = new ModelPerusahaan();

            $update = [
                'nm_perusahaan'=>$this->request->getVar('nm_perusahaan')
            ];

            $where = [
                'id_perusahaan'=>$this->request->getVar('id_perusahaan')
            ];

            $perusahaanMdl->update($where, $update);
            return redirect()->to(base_url() . 'comp'); 
        }else {
            return redirect()->to(base_url());
        }
        

    }

    public function hapusperusahaan($id_perusahaan=''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $data = [
                'perusahaan' => $perusahaanMdl->
                where('id_perusahaan', $id_perusahaan)->find()
            ];
            return view('perusahaan/v_hapusperusahaan', $data);
        }else {
            return redirect()->to(base_url());
        }  
    }

    public function deleteperusahaan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();

            $where = [
                'id_perusahaan'=>$this->request->getVar('id_perusahaan')
            ];

            $perusahaanMdl->delete($where);
            return redirect()->to(base_url() . 'comp');
        }else {
            return redirect()->to(base_url());
        }
        

    }
    //!SECTION

    //SECTION - Departemen

    public function departemen(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $departemenMdl = new ModelDepartemen();
            $perusahaanMdl = new ModelPerusahaan();
            $data = [
                'title' => 'Informasi Departemen',
                "departemen" => $departemenMdl->getDepartemenData()
            ];
            return view('departemen/v_departemen', $data);
        }else {
            return redirect()->to(base_url());
        }
    }

    public function inputdepartemen(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $data = [
                'title' => 'Informasi Perusahaan',
                "perusahaan" => $perusahaanMdl->findAll()
            ];
            return view('departemen/v_inputdepartemen', $data);
        }else {
            return redirect()->to(base_url());
        }
    }

    public function simpandepartemen(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $departemenMdl = new ModelDepartemen();
            $insert =[
                    'id_departemen' => $this->request->getVar('id_departemen'),
                    'nm_departemen' => $this->request->getVar('nm_departemen'),
                    'id_perusahaan' => $this->request->getVar('id_perusahaan')

                ];
            $departemenMdl->insert($insert);
        return redirect()->to(base_url() . 'dept');
        }else {
            return redirect()->to(base_url());
        }
    }

    public function editdepartemen($id_departemen=''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $departemenMdl = new ModelDepartemen();
            $data = [
                'perusahaan' => $perusahaanMdl->findAll(),
                'departemen' => $departemenMdl->
                where('id_departemen', $id_departemen)->find()
            ];
            return view('departemen/v_editdepartemen', $data);
        }else {
            return redirect()->to(base_url());
        }
    } 

    public function updatedepartemen(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $departemenMdl = new ModelDepartemen();

            $update = [
                'nm_departemen'=>$this->request->getVar('nm_departemen'),
                'id_perusahaan'=>$this->request->getVar('id_perusahaan')
            ];

            $where = [
                'id_departemen'=>$this->request->getVar('id_departemen')
            ];

            $departemenMdl->update($where, $update);

            $session->setFlashdata('msg', '<div class="alert alert-success alert-dismissible">
                  <h5><i class="icon fas fa-check"></i> Data has been saved successfully.</h5>                  
                </div>');
            return redirect()->to(base_url() . 'dept');
        }else {
            return redirect()->to(base_url());
        }
    }

     public function hapusdepartemen($id_departemen=''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $departemenMdl = new ModelDepartemen();
            $data = [
                'perusahaan' => $perusahaanMdl->findAll(),
                'departemen' => $departemenMdl->
                where('id_departemen', $id_departemen)->find()
            ];
            return view('departemen/v_hapusdepartemen', $data);
        }else {
            return redirect()->to(base_url());
        }
    }

    public function deletedepartemen(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $departemenMdl = new ModelDepartemen();

            $where = [
                'id_departemen'=>$this->request->getVar('id_departemen')
            ];

            $departemenMdl->delete($where);
            return redirect()->to(base_url() . 'dept');
        }else {
            return redirect()->to(base_url());
        }
    }
    //!SECTION

    //SECTION - Karyawan

    public function karyawan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $karyawanMdl = new ModelKaryawan();

            $data = [
                'title' => 'Informasi Karyawan',
                "employee" => $karyawanMdl->getKaryawanData()
            ];

            return view('karyawan/v_karyawan', $data);
        }else {
            return redirect()->to(base_url());
        }
    }

    public function inputkaryawan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $departemenMdl = new ModelDepartemen();

            $data = [
                'perusahaan' => $perusahaanMdl->findAll(),
                'departemen' => $departemenMdl->findAll()
            ];

            return view('karyawan/v_inputkaryawan', $data);
        }else {
            return redirect()->to(base_url());
        }
    }

    public function simpankaryawan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $karyawanMdl = new ModelKaryawan();

            $insert = [
                'nm_karyawan' => $this->request->getVar('nm_karyawan'),
                'id_perusahaan' => $this->request->getVar('id_perusahaan'),
                'id_departemen' => $this->request->getVar('id_departemen')
            ];

            $karyawanMdl->insert($insert);
            $session->setFlashdata('msg', '<div class="alert alert-success alert-dismissible">
                  <h5><i class="icon fas fa-check"></i> Data has been saved successfully.</h5>                  
                </div>');
            return redirect()->to(base_url() . 'employee');
        }else {
            return redirect()->to(base_url());
        }
    }

    public function editkaryawan($id_karyawan=''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $departemenMdl = new ModelDepartemen();
            $karyawanMdl = new ModelKaryawan();

            $data = [
                'perusahaan' => $perusahaanMdl->findAll(),
                'departemen' => $departemenMdl->findAll(),
                'employee' => $karyawanMdl->
                where('id_karyawan', $id_karyawan)->find()
            ];

            return view('karyawan/v_editkaryawan', $data);
        }
    }

    public function updatekaryawan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $karyawanMdl = new ModelKaryawan();

            $update = [
                'nm_karyawan' => $this->request->getVar('nm_karyawan'),
                'id_perusahaan' => $this->request->getVar('id_perusahaan'),
                'id_departemen' => $this->request->getVar('id_departemen')
            ];

            $where = [
                'id_karyawan'=>$this->request->getVar('id_karyawan')
            ];

            $karyawanMdl->update($where, $update);
            return redirect()->to(base_url(). 'employee');
        }
    }

    public function hapuskaryawan($id_karyawan=''){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $perusahaanMdl = new ModelPerusahaan();
            $departemenMdl = new ModelDepartemen();
            $karyawanMdl = new ModelKaryawan();

            $data = [
                'perusahaan' => $perusahaanMdl->findAll(),
                'departemen' => $departemenMdl->findAll(),
                'employee' => $karyawanMdl->
                where('id_karyawan', $id_karyawan)->find()
            ];

            return view('karyawan/v_hapuskaryawan', $data);
        }
    }

    public function deletekaryawan(){
        $session=session();
        if ($session->get('username') != '' && $session->get('login')==true) {
            $karyawanMdl = new ModelKaryawan();

            $where = [
                'id_karyawan'=>$this->request->getVar('id_karyawan')
            ];

            $karyawanMdl->delete($where);
            return redirect()->to(base_url() . 'employee');
        }else {
            return redirect()->to(base_url());
        }
    }
    //!SECTION
}
