<?php

namespace PHPMVC\Models;

use PHPMVC\Core\BaseModel;

class AuthModel extends BaseModel
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        //echo 'Autenticado: AuthModel';
        $userx = ['userid'=> 'bill@email.com', 'password'=> '$2y$12$XCyt3e362GUs0GSz2pqGV.QtJYOQJWBBQWa1nVs/V.lpmvdNOuaHO'];

        $this->query('SELECT email, contrasena FROM "Trabajadores" WHERE email = :userid AND contrasena = :password');
        $this->bind(':userid',$userx['userid']);
        $this->bind(':password', $userx['password']);
        $user = $this->responseUnique();

        return $user;
    } 

    function signIn($userid){
        $this->query('SELECT userid, password FROM "tbl_user" WHERE userid = :userid');
        $this->bind(':userid', $userid);
        $user = $this->responseUnique();
        return $user;
    }
    function verify_pass($user)
    {
        $this->query('SELECT email, contrasena FROM "Trabajadores" WHERE contrasena = :password');
        $this->bind(':password', $user->password);
        $user = $this->responseUnique();
        return $user;
    }

    function signOut()
    {     
        return 'Sesión cerrada.';
    }
}
