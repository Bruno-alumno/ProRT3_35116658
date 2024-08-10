<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller {

    public function _construct(){
        helper (['form', 'url']);
}
    public function create(){

        $dato['titulo']='Registrarse';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view('back/usuario/Registrarse');
        echo view('front/footer');
    }

    public function formValidation() {

        $input = $this->validate([
        'nombre' => 'required|min_length[3]',
        'apellido' => 'required|min_length[3] max_length[25]',
        'usuario' => 'required|min_length[3]',
        'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
        'pass' => 'requeired|min_length[3]|max_length[10]'
        ],
    ); 
    $formModel = new usuario_Model ();

    if (!$input) {
        $data['titulo']= 'registrarse';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('back/usuario/registrarse', ['validation' => $this->validaton]);
        echo view('front/footer');
    } 
    else {
        $formModel ->save([
            'nombre'=>$this ->request->getVar('nombre'),
            'apellido'=>$this->resquet->getVar('apellido'),
            'usuario'=>$this->request->getVar('usuario'),
            'email'=>$this->resquet->getVar('email'),
            'pass'=>password_hash($this->request->getVar('pass'),PASSWORD_DEFAULT)
            //password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de unico sentido.
        ]);
        //Flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga.
        session()->setFlashdata('success', 'Usuario registrado con exito');
        return $this ->response ->redirect('/login');
    }
    }
    }