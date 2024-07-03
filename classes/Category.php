<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

/**
 * Create a class Category obj
 */
class Category {
    private $name;

    public function __construct($name){
        $this -> name = $name;
    }

    /**
     * return Product class instance category
     *
     * @return void
     */
    public function getName(){
        return $this -> name;
    }

    /**
     * set $category Product class instance as a string
     *
     * @param [string] $category
     * @return void
     */
    public function setName($name){
        return $this -> name = $name;
    }
}

?>