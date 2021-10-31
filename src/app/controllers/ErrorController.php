<?php
namespace PHPMVC\Controllers;

use PHPMVC\Core\BaseController;
use PHPMVC\Core\Session;
use PHPMVC\Models\AuthModel;

class ErrorController extends BaseController
{
    private $session;

    private $modelo;

    public function __construct()
    {
        $this->modelo =  new AuthModel();
        $this->session = Session::getInstance();;
    }

    public function index()
    {
        //Vista de errores
        $this->render('error/index',);
    }
}
