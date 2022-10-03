<?php


namespace App\classes;
class Category
{
    public $categories;

    public function getCategoryInfo($id)
    {
        $this->categories = $this->getAllCategory();
        foreach ($this->categories as $category)
        {
            if ($category['id'] == $id)
            {
                return $category;
            }
        }
    }

    public function getAllCategory()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Electronics',
            ],
            1 => [
                'id' => 2,
                'name' => 'Man Fashion',
            ],
            2 => [
                'id' => 3,
                'name' => 'Kids Fashion',
            ],
            3 => [
                'id' => 4,
                'name' => 'Home & Lifestyle',
            ],
        ];
    }
}