<?php
 
abstract class Product
{
    public $title;
    public $price;
     
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
}
 
class Cart
{
    public $countProduct = [];
   
    public function addProduct($product){                                      
       $product->numberProduct = 1; 
       
        if(array_key_exists($product->title, $this->countProduct))
        {
            $this->countProduct[$product->title]->numberProduct++;
        }
        else
        {
            $this->countProduct[$product->title] = $product;
        }
    }
    
    public function deleteAllProduct($product)
    { 
        unset($this->countProduct[$product->title]);
    }
    
    public function deleteOneProduct($product)
    { 
        if(array_key_exists($product->title, $this->countProduct))
        {
        
            if($this->countProduct[$product->title]->numberProduct > 0)
            {
                 $this->countProduct[$product->title]->numberProduct--;
            } 
        }
    }

    public function showAllProduct()
    { 
        $resCountProduct = 0;        
        foreach($this->countProduct as $key => $value)
        {
            echo 'Товар ' . $key . ', количество: ' . $value->numberProduct . '<br>';            
            $resCountProduct = $resCountProduct + $value->numberProduct;             
        } 
        {      
            echo 'Общее количество товаров: ' . $resCountProduct;
        }
    }
       
    public function sum()
    {       
        $res = 0;      
        foreach($this->countProduct as $key => $value)
        {
            $res = $res + ($value->price * $value->numberProduct);
        }

        return $res;        
    }
}
 
class Car extends Product{}

$audi = new Car('audi', 700000);
$audi = new Car('audi', 700000);
$batmobile = new Car('batmobile', 79999999);
 
$Ordering = new Cart();
 
$Ordering->addProduct($audi); 
$Ordering->addProduct($audi);
$Ordering->addProduct($batmobile); 

echo '<br>';
$Ordering->showAllProduct(); 
echo '<br>';
echo '<br>';
echo 'На сумму: ' . $Ordering->sum();

?>