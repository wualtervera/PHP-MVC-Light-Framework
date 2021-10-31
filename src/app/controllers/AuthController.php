<?php

namespace PHPMVC\Controllers;

use PHPMVC\Core\BaseController;
use PHPMVC\Models\AuthModel;
use PHPMVC\Core\Session;

class AuthController extends BaseController
{
    private $session;

    private $modelo;

    function __construct()
    {
        $this->modelo =  new AuthModel();
        $this->session = Session::getInstance();;
    }

    function index($req = null)
    {
        if ($this->session->__get('user_session') === null) {
            
            $this->render('auth/auth',);

        } else {
            //$this->render('dashboard/index',);
            header('Location:' . BASE_PATH . 'dashboard');
        }
    }

    public function signin($req)
    {
        $user = json_decode(json_encode($req));

        /* $opciones = ['cost' => 12,];
        var_dump(password_hash('123', PASSWORD_BCRYPT, $opciones)); //encypt password     
        $pass = '$2y$12$XCyt3e362GUs0GSz2pqGV.QtJYOQJWBBQWa1nVs/V.lpmvdNOuaHO';  */


        if (!empty($user->userid) && !empty($user->password)) {

            $this->modelo = $this->modelo->signIn($user->userid);

            if (!empty($this->modelo)) { //valid email

                $userid = $this->modelo->userid;
                $hash = $this->modelo->password; //the model

                if (password_verify($user->password, $hash)) { //valid password

                    if (!$this->session->__isset($userid)) {
                        $this->session->__set('user_session', $userid);

                        header('Location:' . BASE_PATH);
                    }
                } else {
                    $this->render('auth/auth', $this->msg_auth('invalid_password'));
                }
            } else {
                $this->render('auth/auth', $this->msg_auth('invalid_email'));
            }
        } else {

            $this->render('auth/auth', $this->msg_auth('empty_data'));
        }
    }

    public function signout($req)
    {
        $this->session->__unset('user_session');

        header('Location:' . BASE_PATH);
    }


    public function msg_auth($key_msg){
        $msg_auth = [
            'empty_data' => 'Ingrese sus credenciales correctamente.',
            'invalid_email' => 'Correo o contraseña incorrecto.',
            'invalid_password' => 'Contraseña o correo incorrecto.',
            'successful_auth' => 'Autenticación exitosa.'
        ];

        return $msg_auth[$key_msg];
    }
}
