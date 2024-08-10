<?php 
namespace App\Controller;

use Codeigniter\Controllers;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id')

        $data['perfil_id']=$perfil;

        $dato['titulo']='panel del usuario';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view ('Back/usuario/usuario_logueado', $data);
        echo view ('front/footer');
    }
    
    }
