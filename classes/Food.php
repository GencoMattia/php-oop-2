<?php 

class Food extends Product {
    private $ingredients;
    private $weight;

    public function __construct($name, $price, $imgUrl, $category, $ingredients, $weight){
        parent::__construct($name, $price, $imgUrl, $category);
        $this -> ingredients = $ingredients;
        $this -> weight = $weight;
    }

    /**
     * return Product class instance $ingredients
     *
     * @return void
     */
    public function getIngredients(){
        return $this -> ingredients;
    }

    /**
     * set $ingredients Product class instance as a string
     *
     * @param [string] $name
     * @return void
     */
    public function setIngredients($ingredients){
        return $this -> ingredients = $ingredients;
    }

    /**
     * return Product class instance $weight
     *
     * @return void
     */
    public function getWeight(){
        return $this -> weight;
    }

    /**
     * set $weight Product class instance as a number
     *
     * @param [number] $name
     * @return void
     */
    public function setWeight($weight){
        return $this -> weight = $weight;
    }
}

?>