<?php 

/**
 * Create a Plaything class obj
 */
class Plaything extends Product {
    private $characteristic;
    private $size;

    public function __construct($name, $price, $imgUrl, $category, $characteristic, $size){
        parent::__construct($name, $price, $imgUrl, $category);
        $this -> characteristic = $characteristic;
        $this -> size = $size;
    }

    /**
     * return Product class instance $characteristic
     *
     * @return void
     */
    public function getCharacteristic(){
        return $this -> characteristic;
    }

    /**
     * set $ingredients Product class instance as a string
     *
     * @param [string] $name
     * @return void
     */
    public function setCharacteristic($characteristic){
        return $this -> characteristic = $characteristic;
    }

    /**
     * return Product class instance $size
     *
     * @return void
     */
    public function getSize(){
        return $this -> size;
    }

    /**
     * set $weight Product class instance as a string
     *
     * @param [string] $size
     * @return void
     */
    public function setSize($size){
        return $this -> size = $size;
    }
}

?>