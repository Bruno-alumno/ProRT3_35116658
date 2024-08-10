<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponsetInterface;
use CodeIgniter\Filters\FiltertInterface;

class Auth implements FiltertInterface
{ 
public fuction before(RequestInterface $request, $arguments =null)
/** Si el usuario no se encuentra logueado */
if(!sessionn()->get('logged_in')){
    /**Se redirecciona a la pagina de login */
    return redirect()->to('/login');
}
}
public fuction after(RequestInterface $request, ResponsetInterface $response, $arguments = null)
{
    
}