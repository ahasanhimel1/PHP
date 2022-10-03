<?php


namespace App\classes;


class Product
{
    public function getAllProduct9()
    {
        return [
            0 => [
                'id'     => 1,
                'name'   => 'New T Shirt',
                'price'  => 1250,
                'image'  =>'1.png',
            ],
            1 => [
                'id'     => 2,
                'name'   => 'Modern T Shirt',
                'price'  => 1550,
                'image'  =>'2.png',
            ],
            2 => [
                'id'     => 3,
                'name'   => 'New Shari',
                'price'  => 3250,
                'image'  =>'3.png',
            ],
            3 => [
                'id'     => 4,
                'name'   => 'New Watch',
                'price'  => 1350,
                'image'  =>'4.png',
            ],

        ];
    }
}