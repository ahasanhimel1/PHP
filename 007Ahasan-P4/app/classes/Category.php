<?php


namespace App\classes;


class Category
{
    public function getAllCategory()
    {
        return[
            0 => [
                'id'    => 1,
                'name'  => 'Electronics',
            ],
            1 => [
                'id'  => 2,
                'name'  => 'Man Fashion',
                ],
            2 => [
                'id'  => 3,
                'name'  => 'Home & Lifestyle',
                ],
            3 => [
                'id'  => 4,
                'name'  => 'Woman Fashion',
                ],
            4 => [
                'id'  => 5,
                'name'  => 'Sports',
                ],
        ];
    }
}