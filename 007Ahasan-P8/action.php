<?php

require_once "vendor/autoload.php";

use App\classes\RandomNumber;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'random-numbers')
    {
        $randomNumber = new RandomNumber();
        $randomNumbers = $randomNumber->getRandomNumbers();
        include 'pages/random-numbers.php';

    }
}
elseif (isset($_POST['random_btn']))
{
    $randomNumber = new RandomNumber($_POST);
    $randomNumbers = $randomNumber->getRandomNumbers();
    $result = $randomNumber->sumOfNumbers();
    include "pages/random-numbers.php";
}
elseif (isset($_POST['image_btn']))
{
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);

    $data = getimagesize($_FILES['image']['tmp_name']);
    if ($data)
    {
        $directory    = 'assets/img/';
        $imageName    = $_FILES['image']['name'];
        $destination  = $directory.$imageName;
        move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    }
    else
    {
        echo "Vai..........image den.";
    }


}