<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() 
    {
        $data['titulo']='pagina principal';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes_somos';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
}

    public function acerca_de() 
    {
        $data['titulo']='acerca_de';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
}       
    public function Registrarse() 
    {
        $data['titulo']='Registrarse';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('back/usuario/registrarse');
        echo view('front/footer');   
 }    
    public function Login() 
    {
        $data['titulo']='Login';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/Login');
        echo view('front/footer'); 
}
    
    }
    