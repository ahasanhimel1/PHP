<?php


namespace App\classes;


class HelloWorld
{
    //this is called property
    public $message;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    //this is called method
    public function __construct($data)
    {
        $this->message = $data;  //$this->= self/own class object
        $this->x = 10;
        $this->y = 20;
    }
    //this is called method
    public function index()
    {
//        echo $this->x += $this->y; //30
//        echo "<br/>";
//        echo $this->x -= $this->y; //10
//        echo "<br/>";
//        echo $this->x *= $this->y; //200
//        echo "<br/>";
//        echo $this->x /= $this->y; //10
//        echo "<br/>";
//        echo $this->x %= $this->y; //10
//        echo "<br/>";
//        echo $this->x .= $this->y; //1020
//        echo "<br/>";
//        echo --$this->x;
//        echo "<br/>";
//        echo $this->x;
//        echo $this->x + $this->y;
//        echo "<br/>";
//        echo $this->x - $this->y;
//        echo "<br/>";
//        echo $this->x * $this->y;
//        echo "<br/>";
//        echo $this->x / $this->y;
//        echo "<br/>";
//        echo $this->x % $this->y;
//        echo "<br/>";

        //echo $this->message;

       /* $this->firstName= "Ahasan";
        $this->firstName= false;
        $this->lastName= "Himel";
       */

        // echo gettype($this->firstName);
        //echo $this->firstName .' '. $this->lastName; //use . &nbsp. for more than one speech

        /*
         *To declare variable there are 3 major rules
            *start with $
            *a-z,A-Z,0-9
            *No number in first

         *To declare variable there are 3 standard rules
            *small letter
            *meaning full
           *readable

         * Generally there are 4 typs of Data-Type
           * String
           * Integer
           * double
           * boolean

         *Operator in php
            *Arithmetic operator : +,-,*,/,%,++,--,(-)
            * Assignment operator : =,+=,*=,/=,%=,.=
            * Conditional operator : >,>=,<,<=,==,!=,===,!==
            * Logical operator : $$, || , !
         */

       // echo $this->x < $this->y;
    }
}