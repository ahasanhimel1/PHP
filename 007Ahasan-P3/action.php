<?php

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Product;

//isset er vitor maan thakle true/1 and value na thakle false/blank
if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $helloWorld =new HelloWorld();
        $students = $helloWorld->getAllStudent();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct9();
        include 'pages/product.php';
    }
}