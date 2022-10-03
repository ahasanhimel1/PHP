<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $students = [];


    public function __construct()
    {
        $this->message = "Hello World";
        $this->students = [
            0=> [
                'id'      => 1,
                'name'    => 'Ahasan',
                'email'   => 'ahasan@gmail.com',
                'mobile'  => '01324567899',
            ],
            1=> [
                'id'      => 2,
                'name'    => 'Ullah',
                'email'   => 'ullah@gmail.com',
                'mobile'  => '01723567890',
            ],
            2=> [
                'id'      => 3,
                'name'    => 'Himel',
                'email'   => 'himel@gmail.com',
                'mobile'  => '01934566809',
            ],
        ];
    }


    public function getAllStudent()
    {
        return $this->students;
    }


    public function index()
    {
        //echo $this->message;

//        foreach ($this->students as $student)
//        {
//            foreach ($student as $item)
//            {
//                echo $item.' ';
//            }
//            echo '<br/>';
//        }

        //echo '<pre>';
        //print_r($this->students); //this is use to see everything inside array. (foreach)
        //var_dump($this->students);
    }

}