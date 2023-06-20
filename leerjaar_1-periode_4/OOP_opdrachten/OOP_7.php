<?php
class Product
{
    public function formatPrice()
    {
        return number_format($this -> price, decimals: 2);
    }
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
    public function __construct(public $name, public $price, public $currency = "$")
    {
        $this->name = ucfirst($name);
    }
}

$music1 = new Product(name: "CD", price: 5);
$music1 -> setCategory("music ");

$music2 = new Product(name: "Plate Records", price: 10);
$music2 -> setCategory("music ");

$music3 = new Product(name: "Radio", price: 25);
$music3 -> setCategory("music ");

$music4 = new Product(name: "Concerts", price: 100);
$music4 -> setCategory("music ");

var_dump($music1, $music2, $music3, $music4);
echo "<br><br>";

echo $music1 -> category. " ";
echo $music1 -> name. " ";
echo $music1 -> currency;
echo $music1 -> formatPrice(). "<br><br>";

echo $music2 -> category. " ";
echo $music2 -> name. " ";
echo $music2 -> currency;
echo $music2 -> formatPrice(). "<br><br>";

echo $music3 -> category. " ";
echo $music3 -> name. " ";
echo $music3 -> currency;
echo $music3 -> formatPrice(). "<br><br>";

echo $music4 -> category. " ";
echo $music4 -> name. " ";
echo $music4 -> currency;
echo $music4 -> formatPrice(). "<br><br>";
?>