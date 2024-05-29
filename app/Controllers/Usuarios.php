<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuariosModel;

class Usuarios extends Controller {

    public function index() {
       $data['title'] = 'Login';

       echo view('templates/header', $data);
       echo view('login_page');
       echo view('templates/footer');
    }
    public function login() {
        $model = new UsuariosModel();

        $user = $this->request->getVar('user');
        $senha = $this->request->getVar('senha');

        $data['usuarios'] = $model->getUsuarios($user, $senha);

        if (empty($data['usuarios'])) {

        return redirect('login');

        } else {

            return redirect('noticias');

        }
    }
}