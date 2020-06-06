<?php 



class Category extends DB
{
    private $table = "categories";

    public function getAllCats()
    {
        return $this->query('SELECT * FROM categories')->fetchAll();
    }
}
















?>