<?php
namespace PHPMVC\Core;
use Exception;

class BaseView
{   
    protected $template;
    protected $controller;
    protected $params;

    public function __construct($controller, $params = [])
    {
        $this->controller = $controller;
        $this->params = $params;
        $this->render($this->controller);
    }

    protected function render($view)
    {
        if (file_exists("./app/views/$view.php")) {
            $file_view = "./app/views/$view.php";
            $this->template = $this->getContentTemplate($file_view);
            echo $this->template;
        } else {
            throw new Exception("Error. No existe la vista en: $view.php");
        }
    }

    protected function getContentTemplate($file_view)
    {
        //extract($this->params);
        
        ob_start();
        $data =  $this->params; //info -> var data
        require($file_view);
        $template = ob_get_contents();
        ob_end_clean();

        return $template;
    }
}
