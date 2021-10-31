<?php

namespace PHPMVC\Core;

use PHPMVC\Core\BaseView;

abstract class BaseController
{
   private $view;
   
    public function render($controler = '', $params = []){
        $this->view = new BaseView($controler, $params);

    }
}