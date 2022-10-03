<?php


namespace App\classes;


class HelloWorld
{
    public $messsage;
    public $x;
    public $y;
    public $z;
    public $check;
    public $data = [];

    public function __construct()
    {
        $this->messsage = "Hello World";
        $this->x =10;
        $this->y =20;
        $this->z =30;
        $this->check = true;
        //$this->check = false;

    }

    public function index()
    {
        //echo $this->check;
        //echo !$this->check;

        //echo $this->messsage;

        //3 Logical operator: &&, ||, !

        //        echo ($this->x < $this->y && $this->y < $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y && $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x < $this->y && $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y && $this->y < $this->z);
        //        echo '<br/>';

        //        echo ($this->x < $this->y || $this->y < $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y || $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x < $this->y || $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y || $this->y < $this->z);
        //        echo '<br/>';


        //Statement
//            $this->x = 100;
//            $this->y = 200;
//            $this->z = $this->x + $this->y;
//            echo $this->z;
//            echo '<br/>';

        //Conditional statement(if,if else,if else if,switch)
//        $this->x = 30;
//        $this->y = 200;
//        $this->z = $this->x + $this->y;

//            if ($this->x > $this->y)
//            {
//                echo $this->z;
//            }

//            else
//            {
//                echo "Hello Bangladesh";
//            }

//            elseif($this->y > $this->z)
//            {
//                echo "Hello Bangladesh";
//            }

//            elseif($this->y < $this->z)
//            {
//                echo "Hello KawranBazar";
//            }

//            else
//            {
//                echo "Hello PHP";
//            }


//              switch ($this->x) //switch case a break use kora must. Noy j porjonto break na ashbe kaj cholobe.
//              {
//                  case 10:
//                      echo 'Hello World';
//                      break;
//                  case 20:
//                      echo 'Hello Bangladesh';
//                      break;
//                  case 30:
//                      echo 'Hello Dhaka';
//                      break;
//                  default:
//                      echo 'Hello BITM';
//              }


        //Repeated Statement(for,while,do while,foreach)
//
//        for ($this->x; $this->x >= 11; $this->x--)
//        {
//            if ($this->x == 15) {
//                break;
//            }
//            echo $this->x.'<br/>';
//        }


//        while ($this->x < 50)
//        {
//            echo $this->x.' ';
//            $this->x++;
//        }


//        do
//        {
//            echo $this->x;
//            $this->x++;
//        } while ($this->x > 50);



         //Array
        //array starts from 0

//         $this->data  = [100, 200, 300, 'BITM', 'SEIP', true, false, 50.20];
//         //echo $this->data[17];
//         foreach ($this->data as $item)
//         {
//             echo $item.' ';
//         }

          //2D array
           $this->data= [
               0 => [
                   'name'   => 'Ahasan',
                   'email'  => 'ahasanhimel1@gmail.com',
                   'mobile' => [
                      'person'  =>'12345666666',
                      'gurdian' =>'36697841114',
               ]
               ],

               1 => [
                   'name'   => 'Himel',
                   'email'  => 'himel1@gmail.com',
                   'mobile' => [
                       'person'  =>'12345666666',
                       'gurdian' =>'36697841114',
                   ]
               ]
           ];


           //echo $this->data['name'];
//        foreach ( $this->data as $index => $item)
//        {
//            echo "index: ".$index ."value : ".$item.' ';
//        }

          //echo $this->data[0]['name'];

        foreach ($this->data as $item)
        {
            //echo $item['name'].$item['email'].$item['mobile'].'<br/>';
            foreach ($item as $value)
            {
                if (is_array($value))
                {
                    foreach ($value as $v_item)
                    {
                        echo $v_item.' ';
                    }
                }
                else
                {
                    echo $value.' ';
                }
            }
            echo '<br/>';
        }



    }
}