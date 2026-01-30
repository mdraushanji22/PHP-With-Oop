<?php
interface ProductFeature
{
    function productDetails();
    function Images();
}
class Products implements ProductFeature
{
    function productDetails()
    {
        echo "product details";
    }
    function Images()
    {
        echo "image upload";
    }
}
$product = new Products();
$product->productDetails();
echo "<br>";
$product->Images();
