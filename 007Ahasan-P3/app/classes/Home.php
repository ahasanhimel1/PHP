<?php


namespace App\classes;


class Home
{
    public function index()
    {
        //header use for load any file
        // ? what sign means global get array ($_GET)
        header('location: action.php?page=home');
    }
}