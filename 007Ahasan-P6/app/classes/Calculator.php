<?php


namespace App\classes;


class Calculator
{
    public $first_number;
    public $last_number;
    public $choice;
    public $result;
    public function __construct($data)
    {
        $this->first_number = $data['first_number'];
        $this->last_number = $data['last_number'];
        $this->choice = $data['choice'];
    }

    public function addition()
    {
       return $this->first_number + $this->last_number;
    }

    public function substraction()
    {
        return $this->first_number - $this->last_number;
    }

    public function multiplication()
    {
        return $this->first_number * $this->last_number;
    }

    public function division()
    {
        return $this->first_number / $this->last_number;
    }

    public function modulus()
    {
        return$this->first_number % $this->last_number;
    }

    public function calculator()
    {
        switch ($this->choice)
        {
            case '+' : $this->result = $this->addition();
                break;
            case '-' : $this->result = $this->substraction();
                break;
            case '*' : $this->result = $this->multiplication();
                break;
            case '/' : $this->result = $this->division();
                break;
            case '%' : $this->result = $this->modulus();
                break;
        }
        return $this->result;
    }
}