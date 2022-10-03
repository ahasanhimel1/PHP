<?php
require_once 'vendor/autoload.php';
use App\classes\Series;
use App\classes\Subject;
use App\classes\Registration;

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

$subject  = new Subject();
$subjects = $subject->getAllSubject();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'odd-even')
    {
        include 'pages/odd-even.php';
    }
    elseif ($_GET['page'] == 'sum-of-series')
    {
        include 'pages/series-sum.php';
    }
    elseif ($_GET['page'] == 'registration')
    {
        include 'pages/registration.php';
    }
}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->index();
    include 'pages/home.php';
}
elseif (isset($_POST['odd_even_btn']))
{
    $series = new Series($_POST);
    $result = $series->oddEven();
    include 'pages/odd-even.php';
}
elseif (isset($_POST['series_sum_btn']))
{
    $series = new Series($_POST);
    $result = $series->seriesSum();
    include 'pages/series-sum.php';
}

elseif (isset($_POST['reg_btn']))
{
    $registration   = new Registration($_POST);
    $result         = $registration->getAllData();
    include 'pages/registration.php';
}