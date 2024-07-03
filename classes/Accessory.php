<?php 

/**
 * Create a Accessory class obj
 */
class Accessory extends Product {
    private $material;
    private $size;

    public function __construct($name, $price, $imgUrl, $category, $material, $size){
        parent::__construct($name, $price, $imgUrl, $category);
        $this -> material = $material;
        $this -> size = $size;
    }

    /**
     * return Product class instance $material
     *
     * @return void
     */
    public function getMaterial(){
        return $this -> material;
    }

    /**
     * set $material Product class instance as a string
     *
     * @param [string] $name
     * @return void
     */
    public function setMaterial($material){
        return $this -> material = $material;
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