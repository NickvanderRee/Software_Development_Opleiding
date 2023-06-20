<?php
class Product
{
    public $name;
    public $price;
    public $currency;
    public $category;

    public function formatPrice()
    {
        return number_format($this -> price, decimals: 2);
    }
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
    public function __construct($name, $price, $currency = "$")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function getproduct(){
        return "Het product". " ". $this->name. " ". "kost". " ".$this->currency. $this->price;
    }
}

$music1 = new Product(name: "CD", price: 5);
$music1 -> setCategory("music ");

$music2 = new Product(name: "plate records", price: 10);
$music2 -> setCategory("music ");

$music3 = new Product(name: "radio", price: 25);
$music3 -> setCategory("music ");

$music4 = new Product(name: "concert ticket", price: 100);
$music4 -> setCategory("music ");

var_dump($music1, $music2, $music3, $music4);
echo "<br><br>";

echo $music1->getproduct(). "<br><br>";
echo $music2->getproduct(). "<br><br>";
echo $music3->getproduct(). "<br><br>";
echo $music4->getproduct(). "<br><br>";