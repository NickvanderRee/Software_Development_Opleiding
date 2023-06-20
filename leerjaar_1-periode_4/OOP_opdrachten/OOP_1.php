<?php
class Product
{
    public $name;
    public $price;

    public function formatPrice()
    {
        return number_format($this -> price, decimals: 2);
    }
}

$drink1 = new Product();
$drink1 -> name = "Coca Cola";
$drink1 -> price = "3";

$drink2 = new Product();
$drink2 -> name = "pepsi";
$drink2 -> price = "2";

$drink3 = new Product();
$drink3 -> name = "Dr Pepper";
$drink3 -> price = "2";

var_dump($drink1, $drink2, $drink3, $drink4);
?>