<?php

namespace PHPMVC\Controllers;

use PHPMVC\Core\BaseController;
use PHPMVC\Models\DashboardModel;
use PHPMVC\Core\Session;

class DashboardController extends BaseController
{
    private $session;

    private $model;

    function __construct()
    {
        $this->model =  new DashboardModel();
        $this->session = Session::getInstance();;
    }

    function index($req = null)
    {
        $sessionName = $this->session->__get('user_session');

        if ($sessionName === null) {

            header('Location:' . BASE_PATH . 'Auth/auth');

        } else {

            $this->model = $this->model->index($sessionName);
            $this->render('dashboard/index', $this->model);
        }
    }

    
}
