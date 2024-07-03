<?php 
/**
 * Create a class Product obj
 */
class Product {
    private $name;
    private $price;
    private $imgUrl;
    private $category;

    public function __construct($name, $price, $imgUrl, $category){
        $this -> name = $name;
        $this -> price = $price;
        $this -> imgUrl = $imgUrl;
        $this -> category = $category;
    }

    /**
     * return Product class instance name
     *
     * @return void
     */
    public function getName(){
        return $this -> name;
    }

    /**
     * set $name Product class instance as a string
     *
     * @param [string] $name
     * @return void
     */
    public function setName($name){
        return $this -> name = $name;
    }

    /**
     * return Product class instance price
     *
     * @return void
     */
    public function getPrice(){
        return $this -> price;
    }

    /**
     * set $price Product class instance as a string
     *
     * @param [string] $price
     * @return void
     */
    public function setPrice($price){
        return $this -> price = $price;
    }

    /**
     * return Product class instance imgUrl
     *
     * @return void
     */
    public function getImgUrl(){
        return $this -> imgUrl;
    }

    /**
     * set $imgUrl Product class instance as a string
     *
     * @param [string] $price
     * @return void
     */
    public function setImgUrl($imgUrl){
        return $this -> imgUrl = $imgUrl;
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