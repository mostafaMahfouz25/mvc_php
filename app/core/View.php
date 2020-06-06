<?php 




class View 
{
    protected $view_file;
    protected $view_data;

    public function __construct($view,$data)
    {
        $this->view_file = $view;
        $this->view_data = $data;
        $this->render();
    }

    public function render()
    {
        if(file_exists(VIEWS.$this->view_file.'.php'))
        {
            extract($this->view_data);
            require_once(VIEWS.$this->view_file.'.php');
        }
        else 
        {
            $error = "This File . : <b>".$this->view_file."</b> Not Exist !";
            notExist($error);
        }
        
    }
}