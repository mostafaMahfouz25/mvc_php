<?php 

class HomeController extends Controller
{
    private $db;


    public function index()
    {
        $this->db = new Category();
        $this->view("home".DS."home",["page"=>"Home Page","categories"=>$this->db->getAllCats()]);
        
    }

    public function about($id='')
    {
        $this->view("home".DS."about",["page"=>"About Page"]);
    }
}