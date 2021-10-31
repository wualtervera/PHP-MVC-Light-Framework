<?php

namespace PHPMVC\Models;

use PHPMVC\Core\BaseModel;

class DashboardModel extends BaseModel
{

    function __construct()
    {
        parent::__construct();
    }

    function index($sessionName)
    {
        $this->query('SELECT userid, name FROM "tbl_user" WHERE userid = :userid');
        $this->bind(':userid', $sessionName);
        $user = $this->responseUnique();

        return $user;
    }

}
