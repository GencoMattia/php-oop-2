<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

/**
 * Create a class Category obj
 */
class Category {
    private $category;

    public function __construct($category){
        $this -> category = $category;
    }

    /**
     * return Product class instance category
     *
     * @return void
     */
    public function getCategory(){
        return $this -> category;
    }

    /**
     * set $category Product class instance as a string
     *
     * @param [string] $category
     * @return void
     */
    public function setCategory($category){
        return $this -> category = $category;
    }
}

?>