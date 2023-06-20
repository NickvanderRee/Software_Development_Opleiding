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
    public function setName($name, $price)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
    }
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
}

$fruit1 = new Product();
$fruit1 -> setCategory("fruit ");
$fruit1 -> name = "appels";
$fruit1 -> price = "3";

$fruit2 = new Product();
$fruit2 -> setCategory("fruit ");
$fruit2 -> name = "peren";
$fruit2 -> price = "4";

$fruit3 = new Product();
$fruit3 -> setCategory("fruit ");
$fruit3 -> name = "bananen";
$fruit3 -> price = "3";

$fruit4 = new Product();
$fruit4 -> setCategory("fruit ");
$fruit4 -> name = "meloenen";
$fruit4 -> price = "7";

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