<?php 



class App 
{
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        $this->checkFromController();
    }


    private function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'],"/");
        if(!empty($request))
        {
            $url = explode("/",$request);
            // controler 
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller" : "HomeController";
            // method
            $this->action = isset($url[1]) ? $url[1]: "index";
            // params 
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }


    /**
     * 
     * check from controller and method 
     */
    private function checkFromController()
    {
        if(file_exists(CONTROLLERS.$this->controller.'.php'))
        {
            if(class_exists($this->controller))
            {
                $this->controller = new $this->controller;
                if(method_exists($this->controller,$this->action))
                {
                    // call controller and method and pass params to the method
                    call_user_func_array([$this->controller,$this->action],$this->params);
                }
                else{
                    $error = "This Class Not Exists !";
                    notExist($error);
                }
                
            }

        }
        else 
        {
            $error = "This Controller File Not Exists !";
            notExist($error);
        }
        
    }
}