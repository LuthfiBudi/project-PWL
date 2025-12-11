<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/v_sign-in');
    }

    public function login(){
        $session = session();

        $username = $_POST['username'];
        $pass = md5($this->request->getVar('password'));
        $userModel = new ModelUser();
        $user = $userModel->where("username = '$username' AND password = '$pass'") -> first();

        if ($user) {
            # code...
            $session->set('username', $user['username']);
            $session->set('nama', $user['nama']);
            $session->set('levelid', $user['level']);
            $session->set('login', true);
            return redirect()->to(base_url('dashboard'));
        } else {
            # code...
            $session->setFlashdata('msg', 
    '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="auto-dismiss-alert">
            <h5><i class="fas fa-exclamation-triangle"></i> Login Failed.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                setTimeout(function() {
                    var alert = document.getElementById("auto-dismiss-alert");
                    if (alert) {
                        alert.style.transition = "opacity 0.5s";
                        alert.style.opacity = "0";
                        setTimeout(function() {
                            alert.remove();
                        }, 500);
                    }
                }, 3000);
            </script>');
            return redirect()->to(base_url());
        }

    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }

}
