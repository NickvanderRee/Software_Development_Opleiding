<?php
class Product
{
    public $name;
    public $price;
    public $currency;

    public function formatPrice()
    {
        return number_format($this -> price, decimals: 2);
    }
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
    public function __construct($name, $price)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
    }
}

$fruit1 = new Product(name: "appels", price: 3);
$fruit1 -> setCategory("fruit ");

$fruit2 = new Product(name: "peren", price: 4);
$fruit2 -> setCategory("fruit ");

$fruit3 = new Product(name: "bananen", price: 3);
$fruit3 -> setCategory("fruit ");

$fruit4 = new Product(name: "meloenen", price: 7);
$fruit4 -> setCategory("fruit ");

var_dump($fruit1, $fruit2, $fruit3, $fruit4);
echo "<br><br>";

echo $fruit1 -> category. " ";
echo $fruit1 -> name. " ";
echo $fruit1 -> formatPrice(). "<br><br>";

echo $fruit2 -> category. " ";
echo $fruit2 -> name. " ";
echo $fruit2 -> formatPrice(). "<br><br>";

echo $fruit3 -> category. " ";
echo $fruit3 -> name. " ";
echo $fruit3 -> formatPrice(). "<br><br>";

echo $fruit4 -> category. " ";
echo $fruit4 -> name. " ";
echo $fruit4 -> formatPrice(). "<br><br>";
?>