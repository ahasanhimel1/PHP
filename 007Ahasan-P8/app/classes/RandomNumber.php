<?php


namespace App\classes;


class RandomNumber
{
    public $number, $result;

    public function getRandomNumbers ()
    {
        return [10,20,30,25,15,40,50];
    }

    public function __construct($data = null)
    {
        if ($data)
        {
            $this->number = $data['number'];
        }
    }

    public function sumOfNumbers ()
    {
        foreach ($this->number as $item)
        {
            $this->result += $item;
        }
        return $this->result;
    }
}