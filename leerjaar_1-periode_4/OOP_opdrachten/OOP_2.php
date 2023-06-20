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

$drink2 = new Product();
$drink2 -> name = "pepsi";

$drink3 = new Product();
$drink3 -> name = "Dr Pepper";

$drink4 = new Product();
$drink4 -> name = "Fanta";

var_dump($drink1, $drink2, $drink3, $drink4);
echo "<br><br>";

echo $drink1 -> name. "<br><br>";

echo $drink2 -> name. "<br><br>";

echo $drink3 -> name. "<br><br>";

echo $drink4 -> name. "<br><br>";
?>