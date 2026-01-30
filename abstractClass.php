<?php
abstract class ProductFeatures
{

    abstract function productDetails();
    abstract function productImage();
    abstract function productOwnerDetails();
}
class uploadProduct extends ProductFeatures
{
    function productDetails()
    {
        echo "Product deatils";
    }
    function productImage()
    {
        echo "Product Images";
    }
    function productOwnerDetails()
    {
        echo "Product owner details";
    }
}
$upload = new uploadProduct();
$upload->productDetails();
echo "<br>";
$upload->productImage();
echo "<br>";

$upload->productOwnerDetails();
